[ 
cart_id=("pro_id"=p_id,"qty"=qt,"weight"=wei)
cart_id=("pro_id"=p_id,"qty"=qt,"weight"=wei)
cart_id=("pro_id"=p_id,"qty"=qt,"weight"=wei)
]

<!-- $('#phpexecuter').text('<?//php// if(isset($_POST["change_weight"]) && isset($_POST["change_weight_cart_id"])){'+ alert("Hiiiiiiiiiiii") +'$chng_wei=$_POST[\'change_weight\'];$chng_wei._cart_id=$_POST[\'change_weight_cart_id\'];$update_qry="update cart set pro_weigth=$chng_wei where cart_id=$chng_wei_cart_id;";if($update_qry_res=mysqli_query($conn,$update_qry)){// Done}}?>'); -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var StfArr = [];
    //functions
    function UpdateStaffList()
    {
        $('#AssignForm #InputStaffList').html('<input type="hidden" name="Stf_list" value="'+StfArr+'">');
        console.log(StfArr);
    }
    function removeStf(Stf_id){
        if($.inArray(Stf_id, StfArr) != -1)
        {
            // Do nothing
        }
        else
        {
            // Updating the List
            StfArr = $.grep(StfArr, function(value){
                return value != Stf_id;
            });
            // console.log(StfArr);
            UpdateStaffList();
        }
        $('#SelectedStaffList #'+Stf_id).remove();
        $('.dropdown #Stafflist #'+Stf_id).prop('disabled', false);
    }

    //Events
$(document).ready(function() {
    // $(document).on('click', '#submitStaff', function() {
    //     //Redirect to HandleVisitActions.php with StfArr
    //     console.log(StfArr);
    //     $('form').submit();
    // });
    $(document).on('change','.dropdown #Stafflist', function(){
        var stf_id = $('.dropdown #Stafflist').val();
        var stf_name = $('.dropdown #Stafflist option:selected').text();
        $('.dropdown #Stafflist option:selected').prop('disabled', true);

        // Updating the List
        StfArr.push(stf_id);
        // console.log(StfArr);
        UpdateStaffList();

        $.ajax({
            type: "POST",
            data: {
                stf_id: stf_id
            },
            cache: false,
            success: function (result) {
                $("#SelectedStaffList").append('\
                <div id="'+stf_id+'" class="my-1 d-flex align-items-center">\
                    <button type="button" class="btn btn-dark text-light mx-2">'+stf_name+'</button> \
                <button type="button" class="btn-close me-2 bg-light text-dark" id="removeStf_'+stf_id+'" aria-label="Close" onclick="removeStf('+stf_id+')""></button></div>');
            }
        });
    });
});






// SELECT * FROM cart ORDER BY cart_id DESC LIMIT 1;