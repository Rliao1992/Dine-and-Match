$(document).ready(
function() {
    



 $("#submitForm").click(
 function() {
                //console.log($("#lastName").val());
				$("#form").hide(300);
				$("#feedback").show(300);
                var formData = ConvertFormToJSON("#contactUs");
                console.log("Data from form (to be sent): ", formData);

                $.ajax({
                    url: "final-post.php",
                    type: "POST",
                    dataType: "JSON",
                    data: formData,
                    success: function(data) {
                        console.log("Data returned from server: ", data);
                        var listData = "";
                        for(var key in data) {
                            listData += "<p>" + key + "<br/>" + data[key] + "</p>" + "<br/>";
                        }
                        $("#feedback").html(listData);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert(jqXHR.statusText);
                    }
                });

                // from: http://www.developerdrive.com/2013/04/turning-a-form-element-into-json-and-submiting-it-via-jquery/
                function ConvertFormToJSON(form){
                    var array = $(form).serializeArray();
                    var json = {};

                    /*
                        Read the following as:
                          For every object in the array, use it's name and value
                          to add a new property to the JavaScript object that is
                          assigned to the variable 'json'. If the value of the
                          input/textArea/select is undefined, use an empty string
                          as the value.
                     */
                    jQuery.each(array, function() {
                        json[this.name] = this.value || '';
                    });
                    return json;
                }

            }
			);

}
);