$(function() {

    var checkboxes = document.querySelectorAll('input.checkbox-group');
        //checkboxesSmall = document.querySelectorAll('input.checkbox-group-10'),
    var checkall = document.getElementById('checkbox-all');
        //checkallSmall = document.getElementById('checkbox-all-10');
        //checkTest = document.getElementById('check-test');

    for(var i=0; i<checkboxes.length; i++) {
        checkboxes[i].onclick = function() {
            var checkedCount = document.querySelectorAll('input.checkbox-group:checked').length;        
            checkall.checked = checkedCount > 0;
            checkall.indeterminate = checkedCount > 0 && checkedCount < checkboxes.length;
        }
    }

    

    checkall.onclick = function() {
        for(var i=0; i<checkboxes.length; i++) {
            if(checkboxes[i].disabled === false){
                checkboxes[i].checked = this.checked;
            }
        }

        //checkTest.disabled= false;
        //checkTest.checked = true;
        //checkTest.disabled= true;
    }
    

});