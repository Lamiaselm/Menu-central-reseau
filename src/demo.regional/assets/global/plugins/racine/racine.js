
var racine1 = document.getElementsByClassName("racine1");
var racine = document.getElementsByClassName("racine");
console.log(racine)
console.log(racine1)
var i;
console.log(racine1.length);
for (i = 0; i < racine1.length; i++) {
  console.log(racine1.length);
  console.log('hey1');
  racine1[i].addEventListener("click", function() {
    this.parentElement.querySelector(".domaine").classList.toggle("active");
    this.classList.toggle("racine-down");
  });
}
for (i = 0; i < racine.length; i++) {
  console.log('hey1');
  racine[i].addEventListener("click", function() {
    this.classList.toggle("racine-down");
    console.log('hey2');
  });
}


    var $domaine = $('.domaine-list').on('click', function(e) {
    $domaine.removeClass('selected');
    $domaine.find("img").removeClass('selected-img');
    $(this).addClass('selected');
  //  $(this).find("img").addClass('selected-img');
    var id= $(this).attr('id');
    $('#network').load('ajax/getnetworks.php?id='+id,function(){       
    });
	$domaine.hover(
  function() {
    $(this).find("img").addClass('hover');
  }, function() {
    $(this).find("img").removeClass('hover');
  }
);
}); 
$(document).on({
		mouseenter: function(){
			$(this).find("img").addClass('hover');
		},
		mouseleave: function(){
			$(this).find("img").removeClass('hover');
		}
	}, '.domaine-list,a.list-group-item');


    $(document).on("click","a.list-group-item",function(){
    var id = $(this).attr('value');
    $('a.list-group-item').find("img").removeClass('selected-img');
    $('a.list-group-item').removeClass('selected');
    $(this).addClass('selected'); 
    $(this).find("img").addClass('selected-img');
    $('.details-network').load('ajax/networkdetails.php?id='+id,function(){       
    });
    $('a.list-group-item').hover(
  function() {
    $(this).find("img").addClass('hover');
  }, function() {
    $(this).find("img").removeClass('hover');
  }
);
});



 



   
