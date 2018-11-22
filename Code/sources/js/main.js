//Used to take id of the class from the SVG clicked
//Quentin Rossier
//Alexandre Junod
//22.11.2018
$(document).ready(function () {
   $('.cls-1').click(function(){
      $('.cls-1').removeClass('selectedItem'); //If something is clicked, there isn't a selected item for the moment
      $('.Default').addClass('hidden'); //Doesn't show the label because there's 0 items selected
      $(this).addClass('selectedItem'); //Select the item clicked

      var idSelected = $(this).attr('id'); //Store the id of the item clicked in idSelected
      var idFinal = '.'+idSelected + "Text" //Add "Text" after the id selected to select the right label to show
      $(idFinal).removeClass('hidden'); //Show the label who corresponds on the item clicked
      //$(this+Text).removeClass('hidden');
      //$(this).attr('id') //Gives the id of the attribute clicked
   })
});
