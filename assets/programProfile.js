function SubmitForm(){var n=$("#Name").val(),t=$("#Id").val();$.ajax({url:systemSubFolderPath+"/ProgramProfiling/SearchForDuplicate",data:{programProfileName:n,id:t},dataType:"json",type:"POST",success:function(n){if(n!=""){var t=constants.MES_EXC_EXT.replace("{0}",constants.PROGRAM_PROFILE);ShowFormMessage(t,"alert-danger")}else $("form").submit()},error:function(){console.log("Error processing request")}})}$(document).ready(function(){$("#create, #edit").click(function(){var n=$("#Name").val().trim(),t=$("#Description").val().trim(),i=$("#Objectives").val().trim();n==""||t==""||i==""||n==" "||t==" "||i==" "?ShowFormMessage(constants.MES_EXC_REQ,"alert-danger"):ClearFormMessage()});$("#myModal").show();$("#print").click(function(){var t=document.getElementById("container").innerHTML,n=window.open("","","left=0,top=0,width=600,height=800");n.document.write(t);n.document.close();n.focus();n.print()});var n=document.getElementById("desc"),t=n.innerHTML;t.replace("\r\n","<br>")})