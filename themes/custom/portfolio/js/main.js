// skill bar
(function ($, Drupal) {
  "use strict";
  Drupal.behaviors.drupalportfolio = {
    attach: function () {
      $(document).ready(function () {
        $(".skillbar").each(function () {
          $(this)
            .find(".skillbar-bar")
            .animate(
              {
                width: $(this).attr("data-percent"),
              },
              6000
            );
        });
      });
      $(".Count").each(function () {
        var $this = $(this);
        $({ Counter: 0 }).animate(
          { Counter: $this.text() },
          {
            duration: 6000,
            easing: "swing",
            step: function () {
              $this.text(Math.ceil(this.Counter));
            },
          }
        );
      });
    },
  };
})(jQuery, Drupal);
//  animation
(function ($, Drupal) {
  "use strict";
  Drupal.behaviors.drupal = {
    attach: function reveal() {
      var reveals = document.querySelectorAll(".reveal");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
      window.addEventListener("scroll", reveal);
    },
  };
})(jQuery, Drupal);
