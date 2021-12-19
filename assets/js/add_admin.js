function check_add_admin(){
    var arr = document.getElementsByTagName('input');
    var name = arr[0].value;
    var password = arr[1].value;
    var password_confirm = arr[2].value;

    if(name==""|| password ==""||password_confirm == ""){
        arr[0].classList.add("my-err");
    }
}