<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    









<script>
    
        
        const contact_basic_details = () => {
            let contact_info = document.querySelector('.contact_info');
            let contact_basic_details = document.querySelector('.contact_basic_details');
            let more_details = document.querySelector('.more_details');
            let social_info = document.querySelector('.social_info');

            let contact_info_tr = contact_info.classList.contains(d - none);
            let contact_basic_details_tr = contact_basic_details.classList.contains(d - none);
            let more_details_tr = more_details.classList.contains(d - none);
            let social_info_tr = social_info.classList.contains(d - none);

            if(contact_basic_details_tr){
                contact_basic_details_tr.classList.remove(d - none);
                contact_info.classList.add(d - none);
                more_details.classList.add(d - none);
                social_info.classList.add(d - none);
            }

        }
        
</script>
</body>
</html>