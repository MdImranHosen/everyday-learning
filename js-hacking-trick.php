/* ///// 19-01-2022  Javascript with file upload without http ////// */
<script>
    let photo = document.getElementById("image-file").files[0];
    let formData = new FormData();

    formData.append("photo", photo);
    fetch('/upload/image', {method: "POST", body: formData});
</script>


/* /// js with html /// */

<script>
async function SavePhoto(inp) 
{
    let user = { name:'john', age:34 };
    let formData = new FormData();
    let photo = inp.files[0];      
         
    formData.append("photo", photo);
    formData.append("user", JSON.stringify(user)); 
    
    const ctrl = new AbortController()    // timeout
    setTimeout(() => ctrl.abort(), 5000);
    
    try {
       let r = await fetch('/upload/image', 
         {method: "POST", body: formData, signal: ctrl.signal}); 
       console.log('HTTP response code:',r.status); 
    } catch(e) {
       console.log('Huston we have problem...:', e);
    }
    
}
</script>
<input id="image-file" type="file" onchange="SavePhoto(this)">
<br><br>
Before selecting the file open chrome console > network tab to see the request details.
<br><br>

