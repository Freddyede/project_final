$(document).ready(()=> {
    const onClick = (element, functions) => {
      $(element).on('click', functions);
    };
    onClick('#alert_my_text', alertFunction);
});
