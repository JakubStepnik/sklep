function up(max) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
    if (document.getElementById("myNumber").value >= parseInt(max)) {
        document.getElementById("myNumber").value = max;
    }
    return false;
}
function down(min) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
    if (document.getElementById("myNumber").value <= parseInt(min)) {
        document.getElementById("myNumber").value = min;
    }
    return false;
}
function getData(){
    if(document.getElementById("myNumber").value<10){
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
}
    return false;
}
function getDate(){
    if(document.getElementById("myNumber").value>0){
        document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
    }
    return false;
}