//Used to take id of the class from the SVG clicked
//Quentin Rossier
//Alexandre Junod
$(document).ready(function () {
   $('.cls-1').click(function(){
      console.log($(this).attr('id'))
   })
});
