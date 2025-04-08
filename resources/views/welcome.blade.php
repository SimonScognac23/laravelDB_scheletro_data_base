
<x-layout>




 <header class="header">
    <div class="container">
        <div class="row justify-content-center align-items-center ">
            <div class="col-12 col-md-6 d-flex justify-content-center">

                 <h1 class class="text-center"> HomePage</h1>

            </div>
        </div>
    </div>
 </header>





 <div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-6 justify-content-center" action="{{route('product.store')}}" method="POST">

            @csrf

            <!-- tabella products (presa da table plus) -->
            <form>

                <!-- Colonna name-->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome del prodotto</label>
                    <input 
                        name="name" 
                        type="text" 
                        class="form-control" 
                        id="name"
                    > <!-- il campo input ha bisogno del name -->             
                </div>


                <!-- Colonna description-->
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione del prodotto</label>
                    <textarea
                        name="description" 
                        cols="30" 
                        rows="5"
                        id="description" 
                        class="form-control"
                    ></textarea> 
                </div>
                <!-- usiamo la text area, ricordandosi che ha bisogno di piu informazioni--> 


                <!-- Colonna prezzo-->
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo del prodotto</label>
                    <div class="input-group">
                        <input 
                            name="price" 
                            type="text"
                            class="form-control" 
                            id="price"
                        > 
                        <span class="input-group-text">$</span>
                    </div>
                    <!-- Usiamo per il price il campo text e poi lo possiamo convertire su lato back-end, 
                         oppure nel db esso convertira automaticamente il dato in numero, 
                         quindi possiamo lasciare il campo text per il price -->    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>




</x-layout>