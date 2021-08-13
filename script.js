$(document).ready(function() {
    $('#menu').change(function() {
        //remove the select attr from the option that currently has a value of selected
        $("option[selected='true']").removeAttr('selected');
        //add the selected attr with value of true to the option that was clicked on
        $(this).attr('selected', 'true');
        //submit the form
        this.form.submit();
    });
});