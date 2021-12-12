//appends an "active" class to .popup and .popup-content when the "start" button is clicked
$(".start").on("click", function() {
  $(".popup-overlay, .popup-content").addClass("active");
});

//removes the "active" class to .popup and .popup-content when the "end" button is clicked 
$(".end, .popup-overlay").on("click", function() {
  $(".popup-overlay, .popup-content").removeClass("active");
});