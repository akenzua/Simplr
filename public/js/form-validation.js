// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='request']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      phone: "required",
      address: "required",
      city: "required",
      business: "required",
      location: "required",
      industry: "required",
      registration: "required",
      startup: "required",
      service: "required",
      category: "required",
      agree: "required",
    },
    // Specify validation error messages
    messages: {
      phone: "Please enter your phone number",
      address: "Please enter the location of your target market",
      city: "Please enter the city",
      agree: "Agree to our terms of service",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});