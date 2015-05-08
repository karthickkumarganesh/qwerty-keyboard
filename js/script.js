var inputnum='';
$(":button").on('click', function() {
    inputnum+=$(this).val();
    //console.log(inputnum);
});
function callScript(){

    if(inputnum.length>=3){
        $.ajax({
            method: "POST",
            url: "listPossibleWords.php",
            data:{"inputnumber":inputnum},
            dataType: "html"
        });
    }
}
setInterval(callScript,500);
setInterval(function(){
    if(inputnum!=''){
        inputnum='';
    }

},5000);