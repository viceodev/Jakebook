document.querySelector('div.toggle_button').addEventListener("click", getMenu);
document.querySelector("div.empty").addEventListener("click", getMenu)
let status =  false;

function getMenu(){
    let menu =  document.querySelector("div.mobile_menu_list");

    if(status ===  false){
        menu.style.cssText = `left:0px`;
        status =  true;
    }else if(status === true){
        menu.style.cssText = `left: -110%`;
        status = false;
    }

}



    let checkHeader =  ()=> {
        let header = document.querySelector("header#desktop");
        let hero = document.querySelector("div.hero");
        let status = false;

        if(pageYOffset === 0 ){
           header.className = "desktop-trans";
           hero.style.cssText = "margin-top: 0px; padding-top: 100px;";
           status = true;
        }else if(pageYOffset != 0){
            header.className = "desktop shadow-sm d-none";
        }
        console.log("true");
    }
    onunload = checkHeader();
    onscroll = checkHeader;
    