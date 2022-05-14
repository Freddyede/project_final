$(document).ready(()=> {
    $.ajax({
        url: admin_uri,
        headers: {
            'Authorization': 'testToken',
            'Demandes' : 'GET'
        },
        type:'GET',
        success: (datas) =>{
            JSON.parse(datas[0]).forEach(user => {
                console.log(user.id+" "+user.email+" "+user.password);
            })
        },
        error: (err) => {
            console.log(err.responseJSON)
        }
    })
});
