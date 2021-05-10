<footer>
    <div class="container clearfix">
        <div class="info">
            <img class ="logo_foot" src=" {{ asset('images/marchio-sito-test.png') }} " alt="Logo della pasta molisana">
            <ul>
                <li>
                    Ragione Sociale: {{ $informazioni['r_s'] }}
                </li>
                <li>
                    Sede Legale : {{$informazioni['sede'] }}
                </li>
                <li>
                    PEC : {{$informazioni['pec'] }}
                </li>
                <li>
                    Tel : {{$informazioni['tel']}}
                </li>
                <li>
                    Fax : {{$informazioni['fax']}}
                </li>
                <li>
                    {{$informazioni['email_info']}} (per segnalazioni degli utenti)
                </li>
                <li>
                    {{$informazioni['email_comm']}}
                </li>
                <li>
                    {{$informazioni['email_exp']}}
                </li>
                <li>
                    Numero verde : {{$informazioni['numero_verde']}}
                </li>
                <li>
                    Telefono : {{$informazioni['telefono']}}
                </li>
            </ul>
        </div>
        <div class="footer_menu">
            <div class="column column1">
                <h3>pastificio</h3>
                <ul>
                    <li> 
                        <a href="#">Il pastificio</a>
                    </li>
                    <li> 
                        <a href="#">Grano decorticato a pietra</a>
                    </li>
                    <li> 
                        <a href="#">Il Molise c'è</a>
                    </li>
                    <li> 
                        <a href="#">Filiera Integrata</a>
                    </li>
                    <li> 
                        <a href="#">100 anni di pasta</a>
                    </li>
                    <li> 
                        <a href="#">Sartoria della pasta</a>
                    </li>
                    <li> 
                        <a href="#">Spaghetto quadrato</a>
                    </li>
                    <li> 
                        <a href="#">Le persone</a>
                    </li>
                </ul>
            </div>
            <div class="column column2">
                <h3>prodotti</h3>
                <ul>
                    <li> 
                        <a href="#">Le classiche</a>
                    </li>
                    <li> 
                        <a href="#">Le integrali</a>
                    </li>
                    <li> 
                        <a href="#">Le speciali</a>
                    </li>
                    <li> 
                        <a href="#">Le biolocighe</a>
                    </li>
                    <li> 
                        <a href="#">Le gluten-free</a>
                    </li>
                    <li> 
                        <a href="#">Le semole</a>
                    </li>
                    <li> 
                        <a href="#">Le extra di lusso</a>
                    </li>
                </ul>
            </div>
            <div class="column column3">
                <h3>collezione da chef</h3>
                <ul>
                    <li> 
                        <a href="#"> Collezione da chef</a>
                    </li>
                    <li> 
                        <a href="#">Grandi cucine</a>
                    </li>
                    <li> 
                        <a href="#">Biologiche</a>
                    </li>
                    <li> 
                        <a href="#">Quadrate</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>