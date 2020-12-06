

const Card = () =>{
    const [student, setStudent] = React.useState([])
    
    React.useEffect(async() =>{
        const url = "http://localhost/fullstackeletro - Kaique  - SP1Tarde/backend";
        const response = await fetch(url);
       setStudent(await response.json())
    },[])
    
    return(
      <div className="container py-5">
        <div className="card w-50 mx-auto mt-3">
              {produtos.map((element) =>{
                  return(
                    <div key={element.id} className="card w-50 mx-auto mt-3">
                        <div className="card-header">
                    {element.name}
                </div>
                <div className="card-body">
                    {element.telphone}
                    
                </div>

                    </div>
                  )

              })}

          </div>
      </div>
    );
}