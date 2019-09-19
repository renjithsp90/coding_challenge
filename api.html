<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <script>
      const codes = ['369844bf', '64d064bf', '32d064bf', '372ce4bf', 'bbfcf518'];
          async function fetchItems(codes) {
              try {
                  var data = await Promise.all(
                      codes.map((c) =>{
                              document.write(`fetching ${c}<br/>`);
                              return fetch('https://api.universalcodes.msupply.org.nz/v1/items?code='+c).then(
                                  (response) => {
                                      return response.json();
                                    }
                              )}));
                  return (data)
              } catch (error) {
                  throw (error)
              }
          }

        fetchItems(codes).then((items)=>
        {
          items.forEach((i)=>{
            if(!i.type){
              const text = `${i[0].code}: ${i[0].name}<br>`
              document.write(text);
            }else{
              const text = `<label style="color: red">${i.message} </label><br/>`;
              document.write(text);
            }
          })
        });
    </script>
  </body>
</html>
