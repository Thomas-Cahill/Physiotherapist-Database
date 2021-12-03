let my_id = $("input[name*='my_id']")
my_id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let title = $("input[name*='title']");
    let first_name = $("input[name*='first_name']");
    let surname = $("input[name*='surname']");
    let mobile = $("input[name*='mobile_number']");
    let email = $("input[name*='email_address']");
    let Address1 = $("input[name*='address_1']");
    let Address2 = $("input[name*='address_2']");
    let town = $("input[name*='town']");
    let city = $("input[name*='county_city']");
    let eircode = $("input[name*='eircode']");


    my_id.val(textvalues[0]);
    title.val(textvalues[1]);
    first_name.val(textvalues[2]);
    surname.val(textvalues[3]);
    mobile.val(textvalues[4]);
    email.val(textvalues[5]);
    Address1.val(textvalues[6]);
    Address2.val(textvalues[7]);
    town.val(textvalues[8]);
    city.val(textvalues[9]);
    eircode.val(textvalues[10]);
});


function displayData(e) {
    let my_id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.my_id == e.target.dataset.my_id){
            textvalues[my_id++] = value.textContent;
        }
    }
    return textvalues;

}