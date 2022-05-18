let alertFunction = () => alert($('#alert_my_text_value').val());
let callAjax = (url, headers, type, callback, callbackError) => $.ajax({ url: url, headers: headers, type: type, success: callback, error: callbackError });
