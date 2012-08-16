// JavaScript file to provide mouseover images
//

if (document.images) {
    // name the img tags sr, sf, ds, and bst and append 'mouseover' in fucntion below
    srmouseover = new Image();
    srmouseover.src = "sr_thumb.png";
    
    sfmouseover = new Image();
    sfmouseover.src = "sf_thumb.png";

    dsmouseover = new Image();
    dsmouseover.src = "ds_thumb.png";

    bstmouseover = new Image();
    bstmouseover.src = "bst_thumb.png";

}

function mouseover ( product ) {

    if (document.images) {
        document[ product ].src = eval( product + "mouseover.src");
    }
}
