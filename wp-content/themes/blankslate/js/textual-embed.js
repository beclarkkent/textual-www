
var siteId = null;
var scripts = document.getElementsByTagName('script');
var textualOpenerElement = null;
for (var i = 0; i < scripts.length; i++) {
    if (scripts[i].hasAttribute('src')
            && scripts[i].getAttribute('src').indexOf('textual-embed') > -1)
        siteId = scripts[i].getAttribute('data-site-id');
}

function textualMessageListener(event) {
    var msg = event.data.split(':');
    if (msg[0] != 'textual')
        return;

    if (msg[1] == 'modalLoaded') {
        var formContainer = document.getElementById('textual-frame-container');
        console.log(decodeURIComponent(msg[2]));
        var style = JSON.parse(decodeURIComponent(msg[2]));

        formContainer = document.getElementById('textual-frame-container');
        formContainer.style.top = (textualOpenerElement.offsetTop + textualOpenerElement.offsetHeight) + 40 + "px";
        // if (window.innerWidth - textualOpenerElement.offsetLeft < 600) {
        //     // Open to the left
        //     console.log("left");
        //     formContainer.style.left = (textualOpenerElement.offsetLeft + textualOpenerElement.offsetWidth - style['width'].split('px')[0]) + "px";
        // } else {
            // Open to the right
            formContainer.style.left = textualOpenerElement.offsetLeft + "px";
        //}
        for (var s in style)
            formContainer.getElementsByTagName('iframe')[0].style[s] = style[s];

        formContainer.getElementsByTagName('iframe')[0].style['transition'] = 'height 300ms';
    } else
    if (msg[1] == 'closeModal') {
        textualCloseModal();
    }
}

function textualCloseModal() {
    var formContainer = document.getElementById('textual-frame-container');
    formContainer.getElementsByTagName('iframe')[0].style['width'] = '0';
    formContainer.getElementsByTagName('iframe')[0].style['height'] = '0';
    formContainer.getElementsByTagName('iframe')[0].style['border'] = 'none';
    formContainer.getElementsByTagName('iframe')[0].style['box-shadow'] = 'none';
    formContainer.parentNode.removeChild(formContainer);
    window.removeEventListener('message', textualMessageListener);
}

if (siteId) {
    var url = document.location.href;
    //var src = "https://staging.textual.com/form/?url=" + encodeURIComponent(url) + "&site_id=" + siteId;
    //"https://www.buzzfeed.com/targetsharetheforce/16-ways-you-can-incorporate-star-wars-into-every-aspect-of"
    var src = "https://cando.textual.com/form/?url=" + encodeURIComponent(url) + "&site_id=" + siteId;
    var buttons = document.getElementsByClassName('textual-share-button');
    var sharingFormFrame = document.createElement("div");
    sharingFormFrame.id = 'textual-frame-container';
    sharingFormFrame.style.position = 'absolute';
    sharingFormFrame.style.zIndex = 99999;
    sharingFormFrame.style.background = "#ffffff";
    sharingFormFrame.innerHTML = '<iframe src="'+src+'" style="width:0; height:0; overflow:hidden; border:none;" />';

    for (var b in buttons) {
        if (typeof buttons[b] !== "object")
            continue;

        buttons[b].style.cursor = "pointer";
        buttons[b].onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();

            var formContainer = document.getElementById('textual-frame-container');
            if (!formContainer) {
                // Show form
                document.documentElement.appendChild(sharingFormFrame);
                textualOpenerElement = this;
                // Add listener for close events
                window.addEventListener('message', textualMessageListener, false)
            } else {
                // Form is already visible, hide
                textualOpenerElement = null;
                textualCloseModal();
            }
        };
    }

    document.addEventListener('click', function(e) {
        // Remove form on outside click
        var formContainer = document.getElementById('textual-frame-container');
        if (formContainer) {
            textualCloseModal();
        }
    });
} else {
    console.log("Incorrect or invalid Textual configuration!");
}
