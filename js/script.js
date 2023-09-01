$(".counter_para").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-countto");
  countDuration = parseInt($this.attr("data-duration"));
  $({ counter: 0 }).animate(
    {
      counter: countTo
    },
    {
      duration: countDuration,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.counter) + "+"); // Add '+' sign here
      },
      complete: function () {
        $this.text(countTo + "+"); // Set the final value with '+'
      }
    }
  );
});
