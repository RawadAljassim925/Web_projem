

/////////////////////////////////////////////////////////////////////////////
let output = document.getElementById("calc");
function hesaplama(num){
    output.value += num;
};
function cl(){
    output.value = "";
};
function sil(){
    output.value  = output.value.slice(0,-1);
}
function calc(){
    try{
    output.value = eval(output.value);
    }
    catch(err){
        output.value ="Error"
    }
};
