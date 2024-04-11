var content = "";
var content2 = "";
var list = new XMLHttpRequest();
list.open('GET', '/Site/.myPhp/dados.json', true);
list.onreadystatechange = function(){
  if(this.readyState == 4){
    var obj = JSON.parse(this.responseText);
    for(i = 0; i < obj.length; i++){
      content += '<div class="item-c"><img src="'+obj[i].prod_url+'"><div class="play"></div><div class="caption">'+obj[i].nome+'</div></div>';
    }
    for(j = (obj.length-1); j >= 0; j--){
      content2 += '<div class="item-c"><img src="'+obj[j].prod_url+'"><div class="play"></div><div class="caption">'+obj[j].nome+'</div></div>';
    }
    document.getElementById('mylist').innerHTML = content;
    document.getElementById('mylist2').innerHTML = content2;  
  }
}
list.send();

function showImages(){
  $(".item-c img").each(function(index) {
    var times = (index*100);
    setTimeout(function(){ $(".item-c img").eq(index).addClass("show-it"); }, times);
  });
}

setTimeout(function(){
  showImages();
},1000);
