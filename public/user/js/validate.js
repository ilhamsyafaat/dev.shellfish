$.validator.addMethod('greaterThanStartDate', function(value, element) {
    var startDate = new Date($('#start').val());
    var endDate = new Date(value);

    return endDate > startDate;
  }, 'Please enter a valid end date.');