function somatorio(valor){  
    if (sessionStorage.getItem("somatorio") == null){
        sessionStorage.clear();
        sessionStorage.setItem("somatorio", valor);
        
    }else{
        somatorio = sessionStorage.getItem("somatorio")
        sessionStorage.setItem("somatorio", Number(somatorio) + Number(valor));
    }
}
function teste(){
    alert(sessionStorage.getItem("somatorio"))
}