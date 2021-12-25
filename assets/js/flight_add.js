
function check_flight_add(){
    let arr = document.getElementsByTagName('input');
    let s = new Date(arr[2].value+" "+arr[4].value);
    let e = new Date(arr[3].value+" "+arr[5].value);
    let start_time = s.getTime();
    let end_time = e.getTime();
    let day = new Date;

   // 
    if(start_time>=end_time || start_time < day.getTime())
    {   alert("Start time cannot be greater than end date\n Start time > day now")
        arr[4].style.borderColor = "yellow";
        arr[5].style.borderColor = "yellow";
        arr[2].style.borderColor = "yellow";
        arr[3].style.borderColor = "yellow";
        return false;
    } 
    if(Number(arr[6].value) < Number( arr[7].value)  || arr[6].value <= "0" || arr[7].value <=0 ){
        alert("Price L2 cannot be greater than price L1\n Price > 0")
        arr[6].style.borderColor = "yellow";
        arr[7].style.borderColor = "yellow";
        return false;
    }
    let start = document.getElementById("Departure_Plane");
    let To = document.getElementById("To_Plane");
    if(start.value == To.value){
        alert("Departure_Plane different To_Plane")
        start.style.borderColor="yellow";
        To.style.borderColor="yellow";
        return false; 
    }
   
}