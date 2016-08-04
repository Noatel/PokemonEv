@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-2">
            <input type="submit" value="Refresh Database" id="refresh_database" disabled>
            <input type="submit" value="Refresh Pokedex" disabled id="refresh_database">
        </div>
        <div class="col-md-5">
            <table class="sortable roundy jquery-tablesorter" style="margin:auto; background:#CCF; border:3px solid #BEBED1">

                <thead><tr>
                    <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"> <a href="/wiki/National_Pok%C3%A9dex" title="National Pokédex"><span style="color:#000;">#</span></a>
                    </th>
                    <th class="unsortable">
                    </th>
                    <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"> Pokémon
                    </th>
                    <th style="font-size:80%" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"> Exp.
                    </th>
                    <th class="roundytop headerSort" style="background-color:#FF0000; font-size:80%" tabindex="0" role="columnheader button" title="Sort ascending"> HP
                    </th>
                    <th class="roundytop headerSort" style="background-color:#F08030; font-size:80%" tabindex="0" role="columnheader button" title="Sort ascending"> Attack
                    </th>
                    <th class="roundytop headerSort" style="background-color:#F8D030; font-size:80%" tabindex="0" role="columnheader button" title="Sort ascending"> Defense
                    </th>
                    <th class="roundytop headerSort" style="background-color:#6890F0; font-size:80%" tabindex="0" role="columnheader button" title="Sort ascending"> Sp. Attack
                    </th>
                    <th class="roundytop headerSort" style="background-color:#78C850; font-size:80%" tabindex="0" role="columnheader button" title="Sort ascending"> Sp. Defense
                    </th>
                    <th class="roundytop headerSort" style="background-color:#F85888; font-size:80%" tabindex="0" role="columnheader button" title="Sort ascending"> Speed
                    </th>
                    <th style="font-size:80%" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"> Total EVs
                    </th></tr></thead><tbody>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>001</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bulbasaur_(Pok%C3%A9mon)" title="001"><img alt="001" src="http://cdn.bulbagarden.net/upload/e/ec/001MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bulbasaur_(Pok%C3%A9mon)" title="Bulbasaur (Pokémon)">Bulbasaur</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>002</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ivysaur_(Pok%C3%A9mon)" title="002"><img alt="002" src="http://cdn.bulbagarden.net/upload/6/6b/002MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ivysaur_(Pok%C3%A9mon)" title="Ivysaur (Pokémon)">Ivysaur</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>003</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Venusaur_(Pok%C3%A9mon)" title="003"><img alt="003" src="http://cdn.bulbagarden.net/upload/d/df/003MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Venusaur_(Pok%C3%A9mon)" title="Venusaur (Pokémon)">Venusaur</a>
                    </td>
                    <td style="background:#FFFFFF"> 236
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>004</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Charmander_(Pok%C3%A9mon)" title="004"><img alt="004" src="http://cdn.bulbagarden.net/upload/b/bb/004MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Charmander_(Pok%C3%A9mon)" title="Charmander (Pokémon)">Charmander</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>005</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Charmeleon_(Pok%C3%A9mon)" title="005"><img alt="005" src="http://cdn.bulbagarden.net/upload/d/dc/005MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Charmeleon_(Pok%C3%A9mon)" title="Charmeleon (Pokémon)">Charmeleon</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>006</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Charizard_(Pok%C3%A9mon)" title="006"><img alt="006" src="http://cdn.bulbagarden.net/upload/0/01/006MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Charizard_(Pok%C3%A9mon)" title="Charizard (Pokémon)">Charizard</a>
                    </td>
                    <td style="background:#FFFFFF"> 240
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>007</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Squirtle_(Pok%C3%A9mon)" title="007"><img alt="007" src="http://cdn.bulbagarden.net/upload/9/92/007MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Squirtle_(Pok%C3%A9mon)" title="Squirtle (Pokémon)">Squirtle</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>008</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wartortle_(Pok%C3%A9mon)" title="008"><img alt="008" src="http://cdn.bulbagarden.net/upload/f/f3/008MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wartortle_(Pok%C3%A9mon)" title="Wartortle (Pokémon)">Wartortle</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>009</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Blastoise_(Pok%C3%A9mon)" title="009"><img alt="009" src="http://cdn.bulbagarden.net/upload/c/cb/009MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Blastoise_(Pok%C3%A9mon)" title="Blastoise (Pokémon)">Blastoise</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>010</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Caterpie_(Pok%C3%A9mon)" title="010"><img alt="010" src="http://cdn.bulbagarden.net/upload/6/69/010MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Caterpie_(Pok%C3%A9mon)" title="Caterpie (Pokémon)">Caterpie</a>
                    </td>
                    <td style="background:#FFFFFF"> 39
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>011</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Metapod_(Pok%C3%A9mon)" title="011"><img alt="011" src="http://cdn.bulbagarden.net/upload/c/ce/011MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Metapod_(Pok%C3%A9mon)" title="Metapod (Pokémon)">Metapod</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>012</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Butterfree_(Pok%C3%A9mon)" title="012"><img alt="012" src="http://cdn.bulbagarden.net/upload/1/14/012MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Butterfree_(Pok%C3%A9mon)" title="Butterfree (Pokémon)">Butterfree</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>013</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Weedle_(Pok%C3%A9mon)" title="013"><img alt="013" src="http://cdn.bulbagarden.net/upload/6/65/013MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Weedle_(Pok%C3%A9mon)" title="Weedle (Pokémon)">Weedle</a>
                    </td>
                    <td style="background:#FFFFFF"> 39
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>014</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kakuna_(Pok%C3%A9mon)" title="014"><img alt="014" src="http://cdn.bulbagarden.net/upload/8/81/014MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kakuna_(Pok%C3%A9mon)" title="Kakuna (Pokémon)">Kakuna</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>015</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Beedrill_(Pok%C3%A9mon)" title="015"><img alt="015" src="http://cdn.bulbagarden.net/upload/5/5a/015MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Beedrill_(Pok%C3%A9mon)" title="Beedrill (Pokémon)">Beedrill</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>016</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pidgey_(Pok%C3%A9mon)" title="016"><img alt="016" src="http://cdn.bulbagarden.net/upload/9/9c/016MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pidgey_(Pok%C3%A9mon)" title="Pidgey (Pokémon)">Pidgey</a>
                    </td>
                    <td style="background:#FFFFFF"> 50
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>017</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pidgeotto_(Pok%C3%A9mon)" title="017"><img alt="017" src="http://cdn.bulbagarden.net/upload/a/a9/017MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pidgeotto_(Pok%C3%A9mon)" title="Pidgeotto (Pokémon)">Pidgeotto</a>
                    </td>
                    <td style="background:#FFFFFF"> 122
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>018</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pidgeot_(Pok%C3%A9mon)" title="018"><img alt="018" src="http://cdn.bulbagarden.net/upload/6/68/018MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pidgeot_(Pok%C3%A9mon)" title="Pidgeot (Pokémon)">Pidgeot</a>
                    </td>
                    <td style="background:#FFFFFF"> 211
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>019</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rattata_(Pok%C3%A9mon)" title="019"><img alt="019" src="http://cdn.bulbagarden.net/upload/4/4d/019MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rattata_(Pok%C3%A9mon)" title="Rattata (Pokémon)">Rattata</a>
                    </td>
                    <td style="background:#FFFFFF"> 51
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>020</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Raticate_(Pok%C3%A9mon)" title="020"><img alt="020" src="http://cdn.bulbagarden.net/upload/4/4d/020MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Raticate_(Pok%C3%A9mon)" title="Raticate (Pokémon)">Raticate</a>
                    </td>
                    <td style="background:#FFFFFF"> 145
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>021</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spearow_(Pok%C3%A9mon)" title="021"><img alt="021" src="http://cdn.bulbagarden.net/upload/5/5b/021MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spearow_(Pok%C3%A9mon)" title="Spearow (Pokémon)">Spearow</a>
                    </td>
                    <td style="background:#FFFFFF"> 52
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>022</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Fearow_(Pok%C3%A9mon)" title="022"><img alt="022" src="http://cdn.bulbagarden.net/upload/3/35/022MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Fearow_(Pok%C3%A9mon)" title="Fearow (Pokémon)">Fearow</a>
                    </td>
                    <td style="background:#FFFFFF"> 155
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>023</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ekans_(Pok%C3%A9mon)" title="023"><img alt="023" src="http://cdn.bulbagarden.net/upload/0/0d/023MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ekans_(Pok%C3%A9mon)" title="Ekans (Pokémon)">Ekans</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>024</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Arbok_(Pok%C3%A9mon)" title="024"><img alt="024" src="http://cdn.bulbagarden.net/upload/d/d3/024MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Arbok_(Pok%C3%A9mon)" title="Arbok (Pokémon)">Arbok</a>
                    </td>
                    <td style="background:#FFFFFF"> 153
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>025</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pikachu_(Pok%C3%A9mon)" title="025"><img alt="025" src="http://cdn.bulbagarden.net/upload/0/0f/025MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pikachu_(Pok%C3%A9mon)" title="Pikachu (Pokémon)">Pikachu</a>
                    </td>
                    <td style="background:#FFFFFF"> 105
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>026</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Raichu_(Pok%C3%A9mon)" title="026"><img alt="026" src="http://cdn.bulbagarden.net/upload/d/da/026MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Raichu_(Pok%C3%A9mon)" title="Raichu (Pokémon)">Raichu</a>
                    </td>
                    <td style="background:#FFFFFF"> 214
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>027</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sandshrew_(Pok%C3%A9mon)" title="027"><img alt="027" src="http://cdn.bulbagarden.net/upload/c/c3/027MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sandshrew_(Pok%C3%A9mon)" title="Sandshrew (Pokémon)">Sandshrew</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>028</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sandslash_(Pok%C3%A9mon)" title="028"><img alt="028" src="http://cdn.bulbagarden.net/upload/e/e0/028MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sandslash_(Pok%C3%A9mon)" title="Sandslash (Pokémon)">Sandslash</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>029</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nidoran%E2%99%80_(Pok%C3%A9mon)" title="029"><img alt="029" src="http://cdn.bulbagarden.net/upload/a/ab/029MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nidoran%E2%99%80_(Pok%C3%A9mon)" title="Nidoran♀ (Pokémon)">Nidoran♀</a>
                    </td>
                    <td style="background:#FFFFFF"> 55
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>030</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nidorina_(Pok%C3%A9mon)" title="030"><img alt="030" src="http://cdn.bulbagarden.net/upload/d/d0/030MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nidorina_(Pok%C3%A9mon)" title="Nidorina (Pokémon)">Nidorina</a>
                    </td>
                    <td style="background:#FFFFFF"> 128
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>031</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nidoqueen_(Pok%C3%A9mon)" title="031"><img alt="031" src="http://cdn.bulbagarden.net/upload/3/31/031MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nidoqueen_(Pok%C3%A9mon)" title="Nidoqueen (Pokémon)">Nidoqueen</a>
                    </td>
                    <td style="background:#FFFFFF"> 223
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>032</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nidoran%E2%99%82_(Pok%C3%A9mon)" title="032"><img alt="032" src="http://cdn.bulbagarden.net/upload/f/fb/032MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nidoran%E2%99%82_(Pok%C3%A9mon)" title="Nidoran♂ (Pokémon)">Nidoran♂</a>
                    </td>
                    <td style="background:#FFFFFF"> 55
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>033</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nidorino_(Pok%C3%A9mon)" title="033"><img alt="033" src="http://cdn.bulbagarden.net/upload/0/0e/033MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nidorino_(Pok%C3%A9mon)" title="Nidorino (Pokémon)">Nidorino</a>
                    </td>
                    <td style="background:#FFFFFF"> 128
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>034</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nidoking_(Pok%C3%A9mon)" title="034"><img alt="034" src="http://cdn.bulbagarden.net/upload/1/18/034MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nidoking_(Pok%C3%A9mon)" title="Nidoking (Pokémon)">Nidoking</a>
                    </td>
                    <td style="background:#FFFFFF"> 223
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>035</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Clefairy_(Pok%C3%A9mon)" title="035"><img alt="035" src="http://cdn.bulbagarden.net/upload/f/f9/035MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Clefairy_(Pok%C3%A9mon)" title="Clefairy (Pokémon)">Clefairy</a>
                    </td>
                    <td style="background:#FFFFFF"> 113
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>036</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Clefable_(Pok%C3%A9mon)" title="036"><img alt="036" src="http://cdn.bulbagarden.net/upload/7/75/036MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Clefable_(Pok%C3%A9mon)" title="Clefable (Pokémon)">Clefable</a>
                    </td>
                    <td style="background:#FFFFFF"> 213
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>037</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vulpix_(Pok%C3%A9mon)" title="037"><img alt="037" src="http://cdn.bulbagarden.net/upload/8/85/037MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vulpix_(Pok%C3%A9mon)" title="Vulpix (Pokémon)">Vulpix</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>038</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ninetales_(Pok%C3%A9mon)" title="038"><img alt="038" src="http://cdn.bulbagarden.net/upload/1/10/038MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ninetales_(Pok%C3%A9mon)" title="Ninetales (Pokémon)">Ninetales</a>
                    </td>
                    <td style="background:#FFFFFF"> 177
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>039</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Jigglypuff_(Pok%C3%A9mon)" title="039"><img alt="039" src="http://cdn.bulbagarden.net/upload/9/9c/039MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Jigglypuff_(Pok%C3%A9mon)" title="Jigglypuff (Pokémon)">Jigglypuff</a>
                    </td>
                    <td style="background:#FFFFFF"> 95
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>040</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wigglytuff_(Pok%C3%A9mon)" title="040"><img alt="040" src="http://cdn.bulbagarden.net/upload/f/f1/040MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wigglytuff_(Pok%C3%A9mon)" title="Wigglytuff (Pokémon)">Wigglytuff</a>
                    </td>
                    <td style="background:#FFFFFF"> 191
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>041</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zubat_(Pok%C3%A9mon)" title="041"><img alt="041" src="http://cdn.bulbagarden.net/upload/9/96/041MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zubat_(Pok%C3%A9mon)" title="Zubat (Pokémon)">Zubat</a>
                    </td>
                    <td style="background:#FFFFFF"> 49
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>042</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Golbat_(Pok%C3%A9mon)" title="042"><img alt="042" src="http://cdn.bulbagarden.net/upload/d/d0/042MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Golbat_(Pok%C3%A9mon)" title="Golbat (Pokémon)">Golbat</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>043</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Oddish_(Pok%C3%A9mon)" title="043"><img alt="043" src="http://cdn.bulbagarden.net/upload/a/a5/043MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Oddish_(Pok%C3%A9mon)" title="Oddish (Pokémon)">Oddish</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>044</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gloom_(Pok%C3%A9mon)" title="044"><img alt="044" src="http://cdn.bulbagarden.net/upload/d/d9/044MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gloom_(Pok%C3%A9mon)" title="Gloom (Pokémon)">Gloom</a>
                    </td>
                    <td style="background:#FFFFFF"> 138
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>045</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vileplume_(Pok%C3%A9mon)" title="045"><img alt="045" src="http://cdn.bulbagarden.net/upload/3/3e/045MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vileplume_(Pok%C3%A9mon)" title="Vileplume (Pokémon)">Vileplume</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>046</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Paras_(Pok%C3%A9mon)" title="046"><img alt="046" src="http://cdn.bulbagarden.net/upload/7/7a/046MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Paras_(Pok%C3%A9mon)" title="Paras (Pokémon)">Paras</a>
                    </td>
                    <td style="background:#FFFFFF"> 57
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>047</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Parasect_(Pok%C3%A9mon)" title="047"><img alt="047" src="http://cdn.bulbagarden.net/upload/4/41/047MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Parasect_(Pok%C3%A9mon)" title="Parasect (Pokémon)">Parasect</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>048</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Venonat_(Pok%C3%A9mon)" title="048"><img alt="048" src="http://cdn.bulbagarden.net/upload/1/1e/048MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Venonat_(Pok%C3%A9mon)" title="Venonat (Pokémon)">Venonat</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>049</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Venomoth_(Pok%C3%A9mon)" title="049"><img alt="049" src="http://cdn.bulbagarden.net/upload/3/31/049MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Venomoth_(Pok%C3%A9mon)" title="Venomoth (Pokémon)">Venomoth</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>050</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Diglett_(Pok%C3%A9mon)" title="050"><img alt="050" src="http://cdn.bulbagarden.net/upload/8/8b/050MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Diglett_(Pok%C3%A9mon)" title="Diglett (Pokémon)">Diglett</a>
                    </td>
                    <td style="background:#FFFFFF"> 53
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>051</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dugtrio_(Pok%C3%A9mon)" title="051"><img alt="051" src="http://cdn.bulbagarden.net/upload/8/86/051MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dugtrio_(Pok%C3%A9mon)" title="Dugtrio (Pokémon)">Dugtrio</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>052</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Meowth_(Pok%C3%A9mon)" title="052"><img alt="052" src="http://cdn.bulbagarden.net/upload/5/50/052MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Meowth_(Pok%C3%A9mon)" title="Meowth (Pokémon)">Meowth</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>053</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Persian_(Pok%C3%A9mon)" title="053"><img alt="053" src="http://cdn.bulbagarden.net/upload/a/a7/053MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Persian_(Pok%C3%A9mon)" title="Persian (Pokémon)">Persian</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>054</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Psyduck_(Pok%C3%A9mon)" title="054"><img alt="054" src="http://cdn.bulbagarden.net/upload/6/6b/054MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Psyduck_(Pok%C3%A9mon)" title="Psyduck (Pokémon)">Psyduck</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>055</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Golduck_(Pok%C3%A9mon)" title="055"><img alt="055" src="http://cdn.bulbagarden.net/upload/6/64/055MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Golduck_(Pok%C3%A9mon)" title="Golduck (Pokémon)">Golduck</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>056</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mankey_(Pok%C3%A9mon)" title="056"><img alt="056" src="http://cdn.bulbagarden.net/upload/a/ad/056MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mankey_(Pok%C3%A9mon)" title="Mankey (Pokémon)">Mankey</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>057</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Primeape_(Pok%C3%A9mon)" title="057"><img alt="057" src="http://cdn.bulbagarden.net/upload/f/f1/057MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Primeape_(Pok%C3%A9mon)" title="Primeape (Pokémon)">Primeape</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>058</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Growlithe_(Pok%C3%A9mon)" title="058"><img alt="058" src="http://cdn.bulbagarden.net/upload/6/69/058MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Growlithe_(Pok%C3%A9mon)" title="Growlithe (Pokémon)">Growlithe</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>059</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Arcanine_(Pok%C3%A9mon)" title="059"><img alt="059" src="http://cdn.bulbagarden.net/upload/3/35/059MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Arcanine_(Pok%C3%A9mon)" title="Arcanine (Pokémon)">Arcanine</a>
                    </td>
                    <td style="background:#FFFFFF"> 194
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>060</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Poliwag_(Pok%C3%A9mon)" title="060"><img alt="060" src="http://cdn.bulbagarden.net/upload/1/17/060MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Poliwag_(Pok%C3%A9mon)" title="Poliwag (Pokémon)">Poliwag</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>061</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Poliwhirl_(Pok%C3%A9mon)" title="061"><img alt="061" src="http://cdn.bulbagarden.net/upload/3/36/061MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Poliwhirl_(Pok%C3%A9mon)" title="Poliwhirl (Pokémon)">Poliwhirl</a>
                    </td>
                    <td style="background:#FFFFFF"> 135
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>062</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Poliwrath_(Pok%C3%A9mon)" title="062"><img alt="062" src="http://cdn.bulbagarden.net/upload/5/5e/062MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Poliwrath_(Pok%C3%A9mon)" title="Poliwrath (Pokémon)">Poliwrath</a>
                    </td>
                    <td style="background:#FFFFFF"> 225
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>063</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Abra_(Pok%C3%A9mon)" title="063"><img alt="063" src="http://cdn.bulbagarden.net/upload/c/cf/063MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Abra_(Pok%C3%A9mon)" title="Abra (Pokémon)">Abra</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>064</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kadabra_(Pok%C3%A9mon)" title="064"><img alt="064" src="http://cdn.bulbagarden.net/upload/b/b6/064MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kadabra_(Pok%C3%A9mon)" title="Kadabra (Pokémon)">Kadabra</a>
                    </td>
                    <td style="background:#FFFFFF"> 140
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>065</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Alakazam_(Pok%C3%A9mon)" title="065"><img alt="065" src="http://cdn.bulbagarden.net/upload/c/ca/065MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Alakazam_(Pok%C3%A9mon)" title="Alakazam (Pokémon)">Alakazam</a>
                    </td>
                    <td style="background:#FFFFFF"> 221
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>066</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Machop_(Pok%C3%A9mon)" title="066"><img alt="066" src="http://cdn.bulbagarden.net/upload/6/6c/066MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Machop_(Pok%C3%A9mon)" title="Machop (Pokémon)">Machop</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>067</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Machoke_(Pok%C3%A9mon)" title="067"><img alt="067" src="http://cdn.bulbagarden.net/upload/0/0f/067MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Machoke_(Pok%C3%A9mon)" title="Machoke (Pokémon)">Machoke</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>068</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Machamp_(Pok%C3%A9mon)" title="068"><img alt="068" src="http://cdn.bulbagarden.net/upload/1/1e/068MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Machamp_(Pok%C3%A9mon)" title="Machamp (Pokémon)">Machamp</a>
                    </td>
                    <td style="background:#FFFFFF"> 227
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>069</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bellsprout_(Pok%C3%A9mon)" title="069"><img alt="069" src="http://cdn.bulbagarden.net/upload/7/7b/069MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bellsprout_(Pok%C3%A9mon)" title="Bellsprout (Pokémon)">Bellsprout</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>070</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Weepinbell_(Pok%C3%A9mon)" title="070"><img alt="070" src="http://cdn.bulbagarden.net/upload/d/d5/070MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Weepinbell_(Pok%C3%A9mon)" title="Weepinbell (Pokémon)">Weepinbell</a>
                    </td>
                    <td style="background:#FFFFFF"> 137
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>071</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Victreebel_(Pok%C3%A9mon)" title="071"><img alt="071" src="http://cdn.bulbagarden.net/upload/9/9b/071MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Victreebel_(Pok%C3%A9mon)" title="Victreebel (Pokémon)">Victreebel</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>072</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tentacool_(Pok%C3%A9mon)" title="072"><img alt="072" src="http://cdn.bulbagarden.net/upload/4/42/072MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tentacool_(Pok%C3%A9mon)" title="Tentacool (Pokémon)">Tentacool</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>073</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tentacruel_(Pok%C3%A9mon)" title="073"><img alt="073" src="http://cdn.bulbagarden.net/upload/f/fc/073MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tentacruel_(Pok%C3%A9mon)" title="Tentacruel (Pokémon)">Tentacruel</a>
                    </td>
                    <td style="background:#FFFFFF"> 180
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>074</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Geodude_(Pok%C3%A9mon)" title="074"><img alt="074" src="http://cdn.bulbagarden.net/upload/0/04/074MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Geodude_(Pok%C3%A9mon)" title="Geodude (Pokémon)">Geodude</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>075</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Graveler_(Pok%C3%A9mon)" title="075"><img alt="075" src="http://cdn.bulbagarden.net/upload/5/5c/075MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Graveler_(Pok%C3%A9mon)" title="Graveler (Pokémon)">Graveler</a>
                    </td>
                    <td style="background:#FFFFFF"> 137
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>076</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Golem_(Pok%C3%A9mon)" title="076"><img alt="076" src="http://cdn.bulbagarden.net/upload/3/34/076MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Golem_(Pok%C3%A9mon)" title="Golem (Pokémon)">Golem</a>
                    </td>
                    <td style="background:#FFFFFF"> 218
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>077</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ponyta_(Pok%C3%A9mon)" title="077"><img alt="077" src="http://cdn.bulbagarden.net/upload/5/55/077MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ponyta_(Pok%C3%A9mon)" title="Ponyta (Pokémon)">Ponyta</a>
                    </td>
                    <td style="background:#FFFFFF"> 82
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>078</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rapidash_(Pok%C3%A9mon)" title="078"><img alt="078" src="http://cdn.bulbagarden.net/upload/6/66/078MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rapidash_(Pok%C3%A9mon)" title="Rapidash (Pokémon)">Rapidash</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>079</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slowpoke_(Pok%C3%A9mon)" title="079"><img alt="079" src="http://cdn.bulbagarden.net/upload/6/6a/079MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slowpoke_(Pok%C3%A9mon)" title="Slowpoke (Pokémon)">Slowpoke</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>080</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slowbro_(Pok%C3%A9mon)" title="080"><img alt="080" src="http://cdn.bulbagarden.net/upload/b/b6/080MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slowbro_(Pok%C3%A9mon)" title="Slowbro (Pokémon)">Slowbro</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>081</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magnemite_(Pok%C3%A9mon)" title="081"><img alt="081" src="http://cdn.bulbagarden.net/upload/0/0f/081MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magnemite_(Pok%C3%A9mon)" title="Magnemite (Pokémon)">Magnemite</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>082</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magneton_(Pok%C3%A9mon)" title="082"><img alt="082" src="http://cdn.bulbagarden.net/upload/0/0c/082MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magneton_(Pok%C3%A9mon)" title="Magneton (Pokémon)">Magneton</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>083</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Farfetch%27d_(Pok%C3%A9mon)" title="083"><img alt="083" src="http://cdn.bulbagarden.net/upload/5/57/083MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Farfetch%27d_(Pok%C3%A9mon)" title="Farfetch'd (Pokémon)">Farfetch'd</a>
                    </td>
                    <td style="background:#FFFFFF"> 123
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>084</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Doduo_(Pok%C3%A9mon)" title="084"><img alt="084" src="http://cdn.bulbagarden.net/upload/f/fc/084MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Doduo_(Pok%C3%A9mon)" title="Doduo (Pokémon)">Doduo</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>085</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dodrio_(Pok%C3%A9mon)" title="085"><img alt="085" src="http://cdn.bulbagarden.net/upload/1/19/085MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dodrio_(Pok%C3%A9mon)" title="Dodrio (Pokémon)">Dodrio</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>086</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Seel_(Pok%C3%A9mon)" title="086"><img alt="086" src="http://cdn.bulbagarden.net/upload/9/9b/086MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Seel_(Pok%C3%A9mon)" title="Seel (Pokémon)">Seel</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>087</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dewgong_(Pok%C3%A9mon)" title="087"><img alt="087" src="http://cdn.bulbagarden.net/upload/2/20/087MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dewgong_(Pok%C3%A9mon)" title="Dewgong (Pokémon)">Dewgong</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>088</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Grimer_(Pok%C3%A9mon)" title="088"><img alt="088" src="http://cdn.bulbagarden.net/upload/5/50/088MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Grimer_(Pok%C3%A9mon)" title="Grimer (Pokémon)">Grimer</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>089</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Muk_(Pok%C3%A9mon)" title="089"><img alt="089" src="http://cdn.bulbagarden.net/upload/b/b4/089MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Muk_(Pok%C3%A9mon)" title="Muk (Pokémon)">Muk</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>090</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shellder_(Pok%C3%A9mon)" title="090"><img alt="090" src="http://cdn.bulbagarden.net/upload/4/41/090MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shellder_(Pok%C3%A9mon)" title="Shellder (Pokémon)">Shellder</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>091</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cloyster_(Pok%C3%A9mon)" title="091"><img alt="091" src="http://cdn.bulbagarden.net/upload/b/bc/091MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cloyster_(Pok%C3%A9mon)" title="Cloyster (Pokémon)">Cloyster</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>092</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gastly_(Pok%C3%A9mon)" title="092"><img alt="092" src="http://cdn.bulbagarden.net/upload/c/cf/092MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gastly_(Pok%C3%A9mon)" title="Gastly (Pokémon)">Gastly</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>093</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Haunter_(Pok%C3%A9mon)" title="093"><img alt="093" src="http://cdn.bulbagarden.net/upload/7/71/093MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Haunter_(Pok%C3%A9mon)" title="Haunter (Pokémon)">Haunter</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>094</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gengar_(Pok%C3%A9mon)" title="094"><img alt="094" src="http://cdn.bulbagarden.net/upload/a/a4/094MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gengar_(Pok%C3%A9mon)" title="Gengar (Pokémon)">Gengar</a>
                    </td>
                    <td style="background:#FFFFFF"> 225
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>095</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Onix_(Pok%C3%A9mon)" title="095"><img alt="095" src="http://cdn.bulbagarden.net/upload/c/cd/095MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Onix_(Pok%C3%A9mon)" title="Onix (Pokémon)">Onix</a>
                    </td>
                    <td style="background:#FFFFFF"> 77
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>096</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Drowzee_(Pok%C3%A9mon)" title="096"><img alt="096" src="http://cdn.bulbagarden.net/upload/8/8e/096MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Drowzee_(Pok%C3%A9mon)" title="Drowzee (Pokémon)">Drowzee</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>097</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hypno_(Pok%C3%A9mon)" title="097"><img alt="097" src="http://cdn.bulbagarden.net/upload/9/98/097MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hypno_(Pok%C3%A9mon)" title="Hypno (Pokémon)">Hypno</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>098</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Krabby_(Pok%C3%A9mon)" title="098"><img alt="098" src="http://cdn.bulbagarden.net/upload/4/40/098MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Krabby_(Pok%C3%A9mon)" title="Krabby (Pokémon)">Krabby</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>099</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kingler_(Pok%C3%A9mon)" title="099"><img alt="099" src="http://cdn.bulbagarden.net/upload/5/5c/099MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kingler_(Pok%C3%A9mon)" title="Kingler (Pokémon)">Kingler</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>100</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Voltorb_(Pok%C3%A9mon)" title="100"><img alt="100" src="http://cdn.bulbagarden.net/upload/c/c1/100MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Voltorb_(Pok%C3%A9mon)" title="Voltorb (Pokémon)">Voltorb</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>101</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Electrode_(Pok%C3%A9mon)" title="101"><img alt="101" src="http://cdn.bulbagarden.net/upload/6/69/101MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Electrode_(Pok%C3%A9mon)" title="Electrode (Pokémon)">Electrode</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>102</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Exeggcute_(Pok%C3%A9mon)" title="102"><img alt="102" src="http://cdn.bulbagarden.net/upload/a/a6/102MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Exeggcute_(Pok%C3%A9mon)" title="Exeggcute (Pokémon)">Exeggcute</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>103</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Exeggutor_(Pok%C3%A9mon)" title="103"><img alt="103" src="http://cdn.bulbagarden.net/upload/d/db/103MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Exeggutor_(Pok%C3%A9mon)" title="Exeggutor (Pokémon)">Exeggutor</a>
                    </td>
                    <td style="background:#FFFFFF"> 182
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>104</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cubone_(Pok%C3%A9mon)" title="104"><img alt="104" src="http://cdn.bulbagarden.net/upload/2/2e/104MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cubone_(Pok%C3%A9mon)" title="Cubone (Pokémon)">Cubone</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>105</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Marowak_(Pok%C3%A9mon)" title="105"><img alt="105" src="http://cdn.bulbagarden.net/upload/6/6f/105MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Marowak_(Pok%C3%A9mon)" title="Marowak (Pokémon)">Marowak</a>
                    </td>
                    <td style="background:#FFFFFF"> 149
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>106</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hitmonlee_(Pok%C3%A9mon)" title="106"><img alt="106" src="http://cdn.bulbagarden.net/upload/6/60/106MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hitmonlee_(Pok%C3%A9mon)" title="Hitmonlee (Pokémon)">Hitmonlee</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>107</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hitmonchan_(Pok%C3%A9mon)" title="107"><img alt="107" src="http://cdn.bulbagarden.net/upload/1/1a/107MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hitmonchan_(Pok%C3%A9mon)" title="Hitmonchan (Pokémon)">Hitmonchan</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>108</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lickitung_(Pok%C3%A9mon)" title="108"><img alt="108" src="http://cdn.bulbagarden.net/upload/2/25/108MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lickitung_(Pok%C3%A9mon)" title="Lickitung (Pokémon)">Lickitung</a>
                    </td>
                    <td style="background:#FFFFFF"> 77
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>109</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Koffing_(Pok%C3%A9mon)" title="109"><img alt="109" src="http://cdn.bulbagarden.net/upload/3/3f/109MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Koffing_(Pok%C3%A9mon)" title="Koffing (Pokémon)">Koffing</a>
                    </td>
                    <td style="background:#FFFFFF"> 68
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>110</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Weezing_(Pok%C3%A9mon)" title="110"><img alt="110" src="http://cdn.bulbagarden.net/upload/2/22/110MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Weezing_(Pok%C3%A9mon)" title="Weezing (Pokémon)">Weezing</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>111</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rhyhorn_(Pok%C3%A9mon)" title="111"><img alt="111" src="http://cdn.bulbagarden.net/upload/6/67/111MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rhyhorn_(Pok%C3%A9mon)" title="Rhyhorn (Pokémon)">Rhyhorn</a>
                    </td>
                    <td style="background:#FFFFFF"> 69
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>112</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rhydon_(Pok%C3%A9mon)" title="112"><img alt="112" src="http://cdn.bulbagarden.net/upload/c/ce/112MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rhydon_(Pok%C3%A9mon)" title="Rhydon (Pokémon)">Rhydon</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>113</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chansey_(Pok%C3%A9mon)" title="113"><img alt="113" src="http://cdn.bulbagarden.net/upload/e/ea/113MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chansey_(Pok%C3%A9mon)" title="Chansey (Pokémon)">Chansey</a>
                    </td>
                    <td style="background:#FFFFFF"> 395
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>114</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tangela_(Pok%C3%A9mon)" title="114"><img alt="114" src="http://cdn.bulbagarden.net/upload/4/45/114MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tangela_(Pok%C3%A9mon)" title="Tangela (Pokémon)">Tangela</a>
                    </td>
                    <td style="background:#FFFFFF"> 87
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>115</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kangaskhan_(Pok%C3%A9mon)" title="115"><img alt="115" src="http://cdn.bulbagarden.net/upload/6/68/115MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kangaskhan_(Pok%C3%A9mon)" title="Kangaskhan (Pokémon)">Kangaskhan</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>116</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Horsea_(Pok%C3%A9mon)" title="116"><img alt="116" src="http://cdn.bulbagarden.net/upload/2/23/116MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Horsea_(Pok%C3%A9mon)" title="Horsea (Pokémon)">Horsea</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>117</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Seadra_(Pok%C3%A9mon)" title="117"><img alt="117" src="http://cdn.bulbagarden.net/upload/8/81/117MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Seadra_(Pok%C3%A9mon)" title="Seadra (Pokémon)">Seadra</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>118</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Goldeen_(Pok%C3%A9mon)" title="118"><img alt="118" src="http://cdn.bulbagarden.net/upload/9/9b/118MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Goldeen_(Pok%C3%A9mon)" title="Goldeen (Pokémon)">Goldeen</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>119</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Seaking_(Pok%C3%A9mon)" title="119"><img alt="119" src="http://cdn.bulbagarden.net/upload/8/88/119MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Seaking_(Pok%C3%A9mon)" title="Seaking (Pokémon)">Seaking</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>120</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Staryu_(Pok%C3%A9mon)" title="120"><img alt="120" src="http://cdn.bulbagarden.net/upload/6/60/120MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Staryu_(Pok%C3%A9mon)" title="Staryu (Pokémon)">Staryu</a>
                    </td>
                    <td style="background:#FFFFFF"> 68
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>121</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Starmie_(Pok%C3%A9mon)" title="121"><img alt="121" src="http://cdn.bulbagarden.net/upload/5/55/121MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Starmie_(Pok%C3%A9mon)" title="Starmie (Pokémon)">Starmie</a>
                    </td>
                    <td style="background:#FFFFFF"> 182
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>122</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mr._Mime_(Pok%C3%A9mon)" title="122"><img alt="122" src="http://cdn.bulbagarden.net/upload/5/58/122MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mr._Mime_(Pok%C3%A9mon)" title="Mr. Mime (Pokémon)">Mr. Mime</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>123</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Scyther_(Pok%C3%A9mon)" title="123"><img alt="123" src="http://cdn.bulbagarden.net/upload/5/54/123MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Scyther_(Pok%C3%A9mon)" title="Scyther (Pokémon)">Scyther</a>
                    </td>
                    <td style="background:#FFFFFF"> 100
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>124</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Jynx_(Pok%C3%A9mon)" title="124"><img alt="124" src="http://cdn.bulbagarden.net/upload/f/f5/124MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Jynx_(Pok%C3%A9mon)" title="Jynx (Pokémon)">Jynx</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>125</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Electabuzz_(Pok%C3%A9mon)" title="125"><img alt="125" src="http://cdn.bulbagarden.net/upload/7/72/125MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Electabuzz_(Pok%C3%A9mon)" title="Electabuzz (Pokémon)">Electabuzz</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>126</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magmar_(Pok%C3%A9mon)" title="126"><img alt="126" src="http://cdn.bulbagarden.net/upload/e/e7/126MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magmar_(Pok%C3%A9mon)" title="Magmar (Pokémon)">Magmar</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>127</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pinsir_(Pok%C3%A9mon)" title="127"><img alt="127" src="http://cdn.bulbagarden.net/upload/5/5c/127MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pinsir_(Pok%C3%A9mon)" title="Pinsir (Pokémon)">Pinsir</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>128</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tauros_(Pok%C3%A9mon)" title="128"><img alt="128" src="http://cdn.bulbagarden.net/upload/9/95/128MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tauros_(Pok%C3%A9mon)" title="Tauros (Pokémon)">Tauros</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>129</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magikarp_(Pok%C3%A9mon)" title="129"><img alt="129" src="http://cdn.bulbagarden.net/upload/7/7c/129MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magikarp_(Pok%C3%A9mon)" title="Magikarp (Pokémon)">Magikarp</a>
                    </td>
                    <td style="background:#FFFFFF"> 40
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>130</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gyarados_(Pok%C3%A9mon)" title="130"><img alt="130" src="http://cdn.bulbagarden.net/upload/a/a0/130MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gyarados_(Pok%C3%A9mon)" title="Gyarados (Pokémon)">Gyarados</a>
                    </td>
                    <td style="background:#FFFFFF"> 189
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>131</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lapras_(Pok%C3%A9mon)" title="131"><img alt="131" src="http://cdn.bulbagarden.net/upload/4/4b/131MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lapras_(Pok%C3%A9mon)" title="Lapras (Pokémon)">Lapras</a>
                    </td>
                    <td style="background:#FFFFFF"> 187
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>132</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ditto_(Pok%C3%A9mon)" title="132"><img alt="132" src="http://cdn.bulbagarden.net/upload/5/53/132MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ditto_(Pok%C3%A9mon)" title="Ditto (Pokémon)">Ditto</a>
                    </td>
                    <td style="background:#FFFFFF"> 101
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>133</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Eevee_(Pok%C3%A9mon)" title="133"><img alt="133" src="http://cdn.bulbagarden.net/upload/d/de/133MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Eevee_(Pok%C3%A9mon)" title="Eevee (Pokémon)">Eevee</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>134</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vaporeon_(Pok%C3%A9mon)" title="134"><img alt="134" src="http://cdn.bulbagarden.net/upload/b/be/134MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vaporeon_(Pok%C3%A9mon)" title="Vaporeon (Pokémon)">Vaporeon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>135</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Jolteon_(Pok%C3%A9mon)" title="135"><img alt="135" src="http://cdn.bulbagarden.net/upload/1/16/135MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Jolteon_(Pok%C3%A9mon)" title="Jolteon (Pokémon)">Jolteon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>136</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Flareon_(Pok%C3%A9mon)" title="136"><img alt="136" src="http://cdn.bulbagarden.net/upload/3/30/136MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Flareon_(Pok%C3%A9mon)" title="Flareon (Pokémon)">Flareon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>137</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Porygon_(Pok%C3%A9mon)" title="137"><img alt="137" src="http://cdn.bulbagarden.net/upload/f/f7/137MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Porygon_(Pok%C3%A9mon)" title="Porygon (Pokémon)">Porygon</a>
                    </td>
                    <td style="background:#FFFFFF"> 79
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>138</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Omanyte_(Pok%C3%A9mon)" title="138"><img alt="138" src="http://cdn.bulbagarden.net/upload/9/97/138MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Omanyte_(Pok%C3%A9mon)" title="Omanyte (Pokémon)">Omanyte</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>139</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Omastar_(Pok%C3%A9mon)" title="139"><img alt="139" src="http://cdn.bulbagarden.net/upload/2/2a/139MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Omastar_(Pok%C3%A9mon)" title="Omastar (Pokémon)">Omastar</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>140</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kabuto_(Pok%C3%A9mon)" title="140"><img alt="140" src="http://cdn.bulbagarden.net/upload/1/1e/140MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kabuto_(Pok%C3%A9mon)" title="Kabuto (Pokémon)">Kabuto</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>141</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kabutops_(Pok%C3%A9mon)" title="141"><img alt="141" src="http://cdn.bulbagarden.net/upload/0/08/141MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kabutops_(Pok%C3%A9mon)" title="Kabutops (Pokémon)">Kabutops</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>142</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aerodactyl_(Pok%C3%A9mon)" title="142"><img alt="142" src="http://cdn.bulbagarden.net/upload/d/d1/142MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aerodactyl_(Pok%C3%A9mon)" title="Aerodactyl (Pokémon)">Aerodactyl</a>
                    </td>
                    <td style="background:#FFFFFF"> 180
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>143</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Snorlax_(Pok%C3%A9mon)" title="143"><img alt="143" src="http://cdn.bulbagarden.net/upload/d/d6/143MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Snorlax_(Pok%C3%A9mon)" title="Snorlax (Pokémon)">Snorlax</a>
                    </td>
                    <td style="background:#FFFFFF"> 189
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>144</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Articuno_(Pok%C3%A9mon)" title="144"><img alt="144" src="http://cdn.bulbagarden.net/upload/0/04/144MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Articuno_(Pok%C3%A9mon)" title="Articuno (Pokémon)">Articuno</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>145</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zapdos_(Pok%C3%A9mon)" title="145"><img alt="145" src="http://cdn.bulbagarden.net/upload/3/3f/145MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zapdos_(Pok%C3%A9mon)" title="Zapdos (Pokémon)">Zapdos</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>146</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Moltres_(Pok%C3%A9mon)" title="146"><img alt="146" src="http://cdn.bulbagarden.net/upload/f/fe/146MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Moltres_(Pok%C3%A9mon)" title="Moltres (Pokémon)">Moltres</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>147</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dratini_(Pok%C3%A9mon)" title="147"><img alt="147" src="http://cdn.bulbagarden.net/upload/2/26/147MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dratini_(Pok%C3%A9mon)" title="Dratini (Pokémon)">Dratini</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>148</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dragonair_(Pok%C3%A9mon)" title="148"><img alt="148" src="http://cdn.bulbagarden.net/upload/4/4e/148MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dragonair_(Pok%C3%A9mon)" title="Dragonair (Pokémon)">Dragonair</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>149</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dragonite_(Pok%C3%A9mon)" title="149"><img alt="149" src="http://cdn.bulbagarden.net/upload/c/cc/149MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dragonite_(Pok%C3%A9mon)" title="Dragonite (Pokémon)">Dragonite</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>150</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mewtwo_(Pok%C3%A9mon)" title="150"><img alt="150" src="http://cdn.bulbagarden.net/upload/1/1a/150MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mewtwo_(Pok%C3%A9mon)" title="Mewtwo (Pokémon)">Mewtwo</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>151</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mew_(Pok%C3%A9mon)" title="151"><img alt="151" src="http://cdn.bulbagarden.net/upload/a/a7/151MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mew_(Pok%C3%A9mon)" title="Mew (Pokémon)">Mew</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>152</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chikorita_(Pok%C3%A9mon)" title="152"><img alt="152" src="http://cdn.bulbagarden.net/upload/7/79/152MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chikorita_(Pok%C3%A9mon)" title="Chikorita (Pokémon)">Chikorita</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>153</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bayleef_(Pok%C3%A9mon)" title="153"><img alt="153" src="http://cdn.bulbagarden.net/upload/3/31/153MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bayleef_(Pok%C3%A9mon)" title="Bayleef (Pokémon)">Bayleef</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>154</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Meganium_(Pok%C3%A9mon)" title="154"><img alt="154" src="http://cdn.bulbagarden.net/upload/8/89/154MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Meganium_(Pok%C3%A9mon)" title="Meganium (Pokémon)">Meganium</a>
                    </td>
                    <td style="background:#FFFFFF"> 236
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>155</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cyndaquil_(Pok%C3%A9mon)" title="155"><img alt="155" src="http://cdn.bulbagarden.net/upload/3/39/155MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cyndaquil_(Pok%C3%A9mon)" title="Cyndaquil (Pokémon)">Cyndaquil</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>156</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Quilava_(Pok%C3%A9mon)" title="156"><img alt="156" src="http://cdn.bulbagarden.net/upload/3/36/156MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Quilava_(Pok%C3%A9mon)" title="Quilava (Pokémon)">Quilava</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>157</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Typhlosion_(Pok%C3%A9mon)" title="157"><img alt="157" src="http://cdn.bulbagarden.net/upload/5/56/157MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Typhlosion_(Pok%C3%A9mon)" title="Typhlosion (Pokémon)">Typhlosion</a>
                    </td>
                    <td style="background:#FFFFFF"> 240
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>158</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Totodile_(Pok%C3%A9mon)" title="158"><img alt="158" src="http://cdn.bulbagarden.net/upload/f/f5/158MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Totodile_(Pok%C3%A9mon)" title="Totodile (Pokémon)">Totodile</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>159</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Croconaw_(Pok%C3%A9mon)" title="159"><img alt="159" src="http://cdn.bulbagarden.net/upload/e/ea/159MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Croconaw_(Pok%C3%A9mon)" title="Croconaw (Pokémon)">Croconaw</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>160</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Feraligatr_(Pok%C3%A9mon)" title="160"><img alt="160" src="http://cdn.bulbagarden.net/upload/6/6d/160MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Feraligatr_(Pok%C3%A9mon)" title="Feraligatr (Pokémon)">Feraligatr</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>161</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sentret_(Pok%C3%A9mon)" title="161"><img alt="161" src="http://cdn.bulbagarden.net/upload/5/5c/161MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sentret_(Pok%C3%A9mon)" title="Sentret (Pokémon)">Sentret</a>
                    </td>
                    <td style="background:#FFFFFF"> 43
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>162</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Furret_(Pok%C3%A9mon)" title="162"><img alt="162" src="http://cdn.bulbagarden.net/upload/c/c1/162MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Furret_(Pok%C3%A9mon)" title="Furret (Pokémon)">Furret</a>
                    </td>
                    <td style="background:#FFFFFF"> 145
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>163</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hoothoot_(Pok%C3%A9mon)" title="163"><img alt="163" src="http://cdn.bulbagarden.net/upload/c/c0/163MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hoothoot_(Pok%C3%A9mon)" title="Hoothoot (Pokémon)">Hoothoot</a>
                    </td>
                    <td style="background:#FFFFFF"> 52
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>164</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Noctowl_(Pok%C3%A9mon)" title="164"><img alt="164" src="http://cdn.bulbagarden.net/upload/7/7a/164MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Noctowl_(Pok%C3%A9mon)" title="Noctowl (Pokémon)">Noctowl</a>
                    </td>
                    <td style="background:#FFFFFF"> 155
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>165</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ledyba_(Pok%C3%A9mon)" title="165"><img alt="165" src="http://cdn.bulbagarden.net/upload/e/e1/165MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ledyba_(Pok%C3%A9mon)" title="Ledyba (Pokémon)">Ledyba</a>
                    </td>
                    <td style="background:#FFFFFF"> 53
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>166</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ledian_(Pok%C3%A9mon)" title="166"><img alt="166" src="http://cdn.bulbagarden.net/upload/4/44/166MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ledian_(Pok%C3%A9mon)" title="Ledian (Pokémon)">Ledian</a>
                    </td>
                    <td style="background:#FFFFFF"> 137
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>167</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spinarak_(Pok%C3%A9mon)" title="167"><img alt="167" src="http://cdn.bulbagarden.net/upload/0/08/167MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spinarak_(Pok%C3%A9mon)" title="Spinarak (Pokémon)">Spinarak</a>
                    </td>
                    <td style="background:#FFFFFF"> 50
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>168</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ariados_(Pok%C3%A9mon)" title="168"><img alt="168" src="http://cdn.bulbagarden.net/upload/a/ae/168MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ariados_(Pok%C3%A9mon)" title="Ariados (Pokémon)">Ariados</a>
                    </td>
                    <td style="background:#FFFFFF"> 137
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>169</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Crobat_(Pok%C3%A9mon)" title="169"><img alt="169" src="http://cdn.bulbagarden.net/upload/9/96/169MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Crobat_(Pok%C3%A9mon)" title="Crobat (Pokémon)">Crobat</a>
                    </td>
                    <td style="background:#FFFFFF"> 241
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>170</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chinchou_(Pok%C3%A9mon)" title="170"><img alt="170" src="http://cdn.bulbagarden.net/upload/2/22/170MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chinchou_(Pok%C3%A9mon)" title="Chinchou (Pokémon)">Chinchou</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>171</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lanturn_(Pok%C3%A9mon)" title="171"><img alt="171" src="http://cdn.bulbagarden.net/upload/4/43/171MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lanturn_(Pok%C3%A9mon)" title="Lanturn (Pokémon)">Lanturn</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>172</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pichu_(Pok%C3%A9mon)" title="172"><img alt="172" src="http://cdn.bulbagarden.net/upload/5/50/172MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pichu_(Pok%C3%A9mon)" title="Pichu (Pokémon)">Pichu</a>
                    </td>
                    <td style="background:#FFFFFF"> 41
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>173</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cleffa_(Pok%C3%A9mon)" title="173"><img alt="173" src="http://cdn.bulbagarden.net/upload/9/90/173MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cleffa_(Pok%C3%A9mon)" title="Cleffa (Pokémon)">Cleffa</a>
                    </td>
                    <td style="background:#FFFFFF"> 44
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>174</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Igglybuff_(Pok%C3%A9mon)" title="174"><img alt="174" src="http://cdn.bulbagarden.net/upload/4/44/174MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Igglybuff_(Pok%C3%A9mon)" title="Igglybuff (Pokémon)">Igglybuff</a>
                    </td>
                    <td style="background:#FFFFFF"> 42
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>175</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Togepi_(Pok%C3%A9mon)" title="175"><img alt="175" src="http://cdn.bulbagarden.net/upload/e/ef/175MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Togepi_(Pok%C3%A9mon)" title="Togepi (Pokémon)">Togepi</a>
                    </td>
                    <td style="background:#FFFFFF"> 49
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>176</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Togetic_(Pok%C3%A9mon)" title="176"><img alt="176" src="http://cdn.bulbagarden.net/upload/8/82/176MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Togetic_(Pok%C3%A9mon)" title="Togetic (Pokémon)">Togetic</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>177</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Natu_(Pok%C3%A9mon)" title="177"><img alt="177" src="http://cdn.bulbagarden.net/upload/0/07/177MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Natu_(Pok%C3%A9mon)" title="Natu (Pokémon)">Natu</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>178</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Xatu_(Pok%C3%A9mon)" title="178"><img alt="178" src="http://cdn.bulbagarden.net/upload/1/12/178MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Xatu_(Pok%C3%A9mon)" title="Xatu (Pokémon)">Xatu</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>179</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mareep_(Pok%C3%A9mon)" title="179"><img alt="179" src="http://cdn.bulbagarden.net/upload/7/75/179MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mareep_(Pok%C3%A9mon)" title="Mareep (Pokémon)">Mareep</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>180</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Flaaffy_(Pok%C3%A9mon)" title="180"><img alt="180" src="http://cdn.bulbagarden.net/upload/2/2a/180MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Flaaffy_(Pok%C3%A9mon)" title="Flaaffy (Pokémon)">Flaaffy</a>
                    </td>
                    <td style="background:#FFFFFF"> 128
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>181</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ampharos_(Pok%C3%A9mon)" title="181"><img alt="181" src="http://cdn.bulbagarden.net/upload/9/91/181MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ampharos_(Pok%C3%A9mon)" title="Ampharos (Pokémon)">Ampharos</a>
                    </td>
                    <td style="background:#FFFFFF"> 225
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>182</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bellossom_(Pok%C3%A9mon)" title="182"><img alt="182" src="http://cdn.bulbagarden.net/upload/8/85/182MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bellossom_(Pok%C3%A9mon)" title="Bellossom (Pokémon)">Bellossom</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>183</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Marill_(Pok%C3%A9mon)" title="183"><img alt="183" src="http://cdn.bulbagarden.net/upload/3/36/183MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Marill_(Pok%C3%A9mon)" title="Marill (Pokémon)">Marill</a>
                    </td>
                    <td style="background:#FFFFFF"> 88
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>184</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Azumarill_(Pok%C3%A9mon)" title="184"><img alt="184" src="http://cdn.bulbagarden.net/upload/8/89/184MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Azumarill_(Pok%C3%A9mon)" title="Azumarill (Pokémon)">Azumarill</a>
                    </td>
                    <td style="background:#FFFFFF"> 185
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>185</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sudowoodo_(Pok%C3%A9mon)" title="185"><img alt="185" src="http://cdn.bulbagarden.net/upload/3/3b/185MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sudowoodo_(Pok%C3%A9mon)" title="Sudowoodo (Pokémon)">Sudowoodo</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>186</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Politoed_(Pok%C3%A9mon)" title="186"><img alt="186" src="http://cdn.bulbagarden.net/upload/e/e9/186MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Politoed_(Pok%C3%A9mon)" title="Politoed (Pokémon)">Politoed</a>
                    </td>
                    <td style="background:#FFFFFF"> 225
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>187</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hoppip_(Pok%C3%A9mon)" title="187"><img alt="187" src="http://cdn.bulbagarden.net/upload/4/43/187MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hoppip_(Pok%C3%A9mon)" title="Hoppip (Pokémon)">Hoppip</a>
                    </td>
                    <td style="background:#FFFFFF"> 50
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>188</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skiploom_(Pok%C3%A9mon)" title="188"><img alt="188" src="http://cdn.bulbagarden.net/upload/8/88/188MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skiploom_(Pok%C3%A9mon)" title="Skiploom (Pokémon)">Skiploom</a>
                    </td>
                    <td style="background:#FFFFFF"> 119
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>189</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Jumpluff_(Pok%C3%A9mon)" title="189"><img alt="189" src="http://cdn.bulbagarden.net/upload/b/ba/189MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Jumpluff_(Pok%C3%A9mon)" title="Jumpluff (Pokémon)">Jumpluff</a>
                    </td>
                    <td style="background:#FFFFFF"> 203
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>190</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aipom_(Pok%C3%A9mon)" title="190"><img alt="190" src="http://cdn.bulbagarden.net/upload/0/00/190MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aipom_(Pok%C3%A9mon)" title="Aipom (Pokémon)">Aipom</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>191</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sunkern_(Pok%C3%A9mon)" title="191"><img alt="191" src="http://cdn.bulbagarden.net/upload/e/e5/191MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sunkern_(Pok%C3%A9mon)" title="Sunkern (Pokémon)">Sunkern</a>
                    </td>
                    <td style="background:#FFFFFF"> 36
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>192</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sunflora_(Pok%C3%A9mon)" title="192"><img alt="192" src="http://cdn.bulbagarden.net/upload/5/5a/192MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sunflora_(Pok%C3%A9mon)" title="Sunflora (Pokémon)">Sunflora</a>
                    </td>
                    <td style="background:#FFFFFF"> 149
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>193</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Yanma_(Pok%C3%A9mon)" title="193"><img alt="193" src="http://cdn.bulbagarden.net/upload/9/97/193MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Yanma_(Pok%C3%A9mon)" title="Yanma (Pokémon)">Yanma</a>
                    </td>
                    <td style="background:#FFFFFF"> 78
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>194</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wooper_(Pok%C3%A9mon)" title="194"><img alt="194" src="http://cdn.bulbagarden.net/upload/0/0d/194MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wooper_(Pok%C3%A9mon)" title="Wooper (Pokémon)">Wooper</a>
                    </td>
                    <td style="background:#FFFFFF"> 42
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>195</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Quagsire_(Pok%C3%A9mon)" title="195"><img alt="195" src="http://cdn.bulbagarden.net/upload/8/8b/195MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Quagsire_(Pok%C3%A9mon)" title="Quagsire (Pokémon)">Quagsire</a>
                    </td>
                    <td style="background:#FFFFFF"> 151
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>196</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Espeon_(Pok%C3%A9mon)" title="196"><img alt="196" src="http://cdn.bulbagarden.net/upload/a/a7/196MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Espeon_(Pok%C3%A9mon)" title="Espeon (Pokémon)">Espeon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>197</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Umbreon_(Pok%C3%A9mon)" title="197"><img alt="197" src="http://cdn.bulbagarden.net/upload/7/76/197MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Umbreon_(Pok%C3%A9mon)" title="Umbreon (Pokémon)">Umbreon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>198</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Murkrow_(Pok%C3%A9mon)" title="198"><img alt="198" src="http://cdn.bulbagarden.net/upload/7/71/198MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Murkrow_(Pok%C3%A9mon)" title="Murkrow (Pokémon)">Murkrow</a>
                    </td>
                    <td style="background:#FFFFFF"> 81
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>199</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slowking_(Pok%C3%A9mon)" title="199"><img alt="199" src="http://cdn.bulbagarden.net/upload/8/80/199MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slowking_(Pok%C3%A9mon)" title="Slowking (Pokémon)">Slowking</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>200</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Misdreavus_(Pok%C3%A9mon)" title="200"><img alt="200" src="http://cdn.bulbagarden.net/upload/8/89/200MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Misdreavus_(Pok%C3%A9mon)" title="Misdreavus (Pokémon)">Misdreavus</a>
                    </td>
                    <td style="background:#FFFFFF"> 87
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>201</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Unown_(Pok%C3%A9mon)" title="201"><img alt="201" src="http://cdn.bulbagarden.net/upload/a/a4/201MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Unown_(Pok%C3%A9mon)" title="Unown (Pokémon)">Unown</a>
                    </td>
                    <td style="background:#FFFFFF"> 118
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>202</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wobbuffet_(Pok%C3%A9mon)" title="202"><img alt="202" src="http://cdn.bulbagarden.net/upload/f/fa/202MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wobbuffet_(Pok%C3%A9mon)" title="Wobbuffet (Pokémon)">Wobbuffet</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>203</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Girafarig_(Pok%C3%A9mon)" title="203"><img alt="203" src="http://cdn.bulbagarden.net/upload/6/6a/203MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Girafarig_(Pok%C3%A9mon)" title="Girafarig (Pokémon)">Girafarig</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>204</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pineco_(Pok%C3%A9mon)" title="204"><img alt="204" src="http://cdn.bulbagarden.net/upload/5/52/204MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pineco_(Pok%C3%A9mon)" title="Pineco (Pokémon)">Pineco</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>205</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Forretress_(Pok%C3%A9mon)" title="205"><img alt="205" src="http://cdn.bulbagarden.net/upload/5/5f/205MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Forretress_(Pok%C3%A9mon)" title="Forretress (Pokémon)">Forretress</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>206</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dunsparce_(Pok%C3%A9mon)" title="206"><img alt="206" src="http://cdn.bulbagarden.net/upload/b/b0/206MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dunsparce_(Pok%C3%A9mon)" title="Dunsparce (Pokémon)">Dunsparce</a>
                    </td>
                    <td style="background:#FFFFFF"> 145
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>207</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gligar_(Pok%C3%A9mon)" title="207"><img alt="207" src="http://cdn.bulbagarden.net/upload/6/67/207MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gligar_(Pok%C3%A9mon)" title="Gligar (Pokémon)">Gligar</a>
                    </td>
                    <td style="background:#FFFFFF"> 86
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>208</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Steelix_(Pok%C3%A9mon)" title="208"><img alt="208" src="http://cdn.bulbagarden.net/upload/b/bf/208MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Steelix_(Pok%C3%A9mon)" title="Steelix (Pokémon)">Steelix</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>209</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Snubbull_(Pok%C3%A9mon)" title="209"><img alt="209" src="http://cdn.bulbagarden.net/upload/6/6c/209MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Snubbull_(Pok%C3%A9mon)" title="Snubbull (Pokémon)">Snubbull</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>210</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Granbull_(Pok%C3%A9mon)" title="210"><img alt="210" src="http://cdn.bulbagarden.net/upload/c/cd/210MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Granbull_(Pok%C3%A9mon)" title="Granbull (Pokémon)">Granbull</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>211</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Qwilfish_(Pok%C3%A9mon)" title="211"><img alt="211" src="http://cdn.bulbagarden.net/upload/9/93/211MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Qwilfish_(Pok%C3%A9mon)" title="Qwilfish (Pokémon)">Qwilfish</a>
                    </td>
                    <td style="background:#FFFFFF"> 86
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>212</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Scizor_(Pok%C3%A9mon)" title="212"><img alt="212" src="http://cdn.bulbagarden.net/upload/f/f2/212MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Scizor_(Pok%C3%A9mon)" title="Scizor (Pokémon)">Scizor</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>213</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shuckle_(Pok%C3%A9mon)" title="213"><img alt="213" src="http://cdn.bulbagarden.net/upload/0/0a/213MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shuckle_(Pok%C3%A9mon)" title="Shuckle (Pokémon)">Shuckle</a>
                    </td>
                    <td style="background:#FFFFFF"> 177
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>214</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Heracross_(Pok%C3%A9mon)" title="214"><img alt="214" src="http://cdn.bulbagarden.net/upload/4/4c/214MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Heracross_(Pok%C3%A9mon)" title="Heracross (Pokémon)">Heracross</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>215</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sneasel_(Pok%C3%A9mon)" title="215"><img alt="215" src="http://cdn.bulbagarden.net/upload/6/67/215MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sneasel_(Pok%C3%A9mon)" title="Sneasel (Pokémon)">Sneasel</a>
                    </td>
                    <td style="background:#FFFFFF"> 86
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>216</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Teddiursa_(Pok%C3%A9mon)" title="216"><img alt="216" src="http://cdn.bulbagarden.net/upload/5/5e/216MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Teddiursa_(Pok%C3%A9mon)" title="Teddiursa (Pokémon)">Teddiursa</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>217</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ursaring_(Pok%C3%A9mon)" title="217"><img alt="217" src="http://cdn.bulbagarden.net/upload/5/50/217MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ursaring_(Pok%C3%A9mon)" title="Ursaring (Pokémon)">Ursaring</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>218</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slugma_(Pok%C3%A9mon)" title="218"><img alt="218" src="http://cdn.bulbagarden.net/upload/d/dc/218MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slugma_(Pok%C3%A9mon)" title="Slugma (Pokémon)">Slugma</a>
                    </td>
                    <td style="background:#FFFFFF"> 50
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>219</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magcargo_(Pok%C3%A9mon)" title="219"><img alt="219" src="http://cdn.bulbagarden.net/upload/6/6b/219MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magcargo_(Pok%C3%A9mon)" title="Magcargo (Pokémon)">Magcargo</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>220</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swinub_(Pok%C3%A9mon)" title="220"><img alt="220" src="http://cdn.bulbagarden.net/upload/1/10/220MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swinub_(Pok%C3%A9mon)" title="Swinub (Pokémon)">Swinub</a>
                    </td>
                    <td style="background:#FFFFFF"> 50
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>221</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Piloswine_(Pok%C3%A9mon)" title="221"><img alt="221" src="http://cdn.bulbagarden.net/upload/6/6d/221MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Piloswine_(Pok%C3%A9mon)" title="Piloswine (Pokémon)">Piloswine</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>222</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Corsola_(Pok%C3%A9mon)" title="222"><img alt="222" src="http://cdn.bulbagarden.net/upload/9/97/222MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Corsola_(Pok%C3%A9mon)" title="Corsola (Pokémon)">Corsola</a>
                    </td>
                    <td style="background:#FFFFFF"> 133
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>223</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Remoraid_(Pok%C3%A9mon)" title="223"><img alt="223" src="http://cdn.bulbagarden.net/upload/4/4f/223MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Remoraid_(Pok%C3%A9mon)" title="Remoraid (Pokémon)">Remoraid</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>224</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Octillery_(Pok%C3%A9mon)" title="224"><img alt="224" src="http://cdn.bulbagarden.net/upload/b/b5/224MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Octillery_(Pok%C3%A9mon)" title="Octillery (Pokémon)">Octillery</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>225</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Delibird_(Pok%C3%A9mon)" title="225"><img alt="225" src="http://cdn.bulbagarden.net/upload/0/0b/225MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Delibird_(Pok%C3%A9mon)" title="Delibird (Pokémon)">Delibird</a>
                    </td>
                    <td style="background:#FFFFFF"> 116
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>226</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mantine_(Pok%C3%A9mon)" title="226"><img alt="226" src="http://cdn.bulbagarden.net/upload/1/11/226MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mantine_(Pok%C3%A9mon)" title="Mantine (Pokémon)">Mantine</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>227</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skarmory_(Pok%C3%A9mon)" title="227"><img alt="227" src="http://cdn.bulbagarden.net/upload/c/c9/227MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skarmory_(Pok%C3%A9mon)" title="Skarmory (Pokémon)">Skarmory</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>228</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Houndour_(Pok%C3%A9mon)" title="228"><img alt="228" src="http://cdn.bulbagarden.net/upload/3/3b/228MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Houndour_(Pok%C3%A9mon)" title="Houndour (Pokémon)">Houndour</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>229</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Houndoom_(Pok%C3%A9mon)" title="229"><img alt="229" src="http://cdn.bulbagarden.net/upload/6/6b/229MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Houndoom_(Pok%C3%A9mon)" title="Houndoom (Pokémon)">Houndoom</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>230</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kingdra_(Pok%C3%A9mon)" title="230"><img alt="230" src="http://cdn.bulbagarden.net/upload/8/8e/230MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kingdra_(Pok%C3%A9mon)" title="Kingdra (Pokémon)">Kingdra</a>
                    </td>
                    <td style="background:#FFFFFF"> 243
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>231</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Phanpy_(Pok%C3%A9mon)" title="231"><img alt="231" src="http://cdn.bulbagarden.net/upload/9/90/231MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Phanpy_(Pok%C3%A9mon)" title="Phanpy (Pokémon)">Phanpy</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>232</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Donphan_(Pok%C3%A9mon)" title="232"><img alt="232" src="http://cdn.bulbagarden.net/upload/2/2c/232MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Donphan_(Pok%C3%A9mon)" title="Donphan (Pokémon)">Donphan</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>233</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Porygon2_(Pok%C3%A9mon)" title="233"><img alt="233" src="http://cdn.bulbagarden.net/upload/7/78/233MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Porygon2_(Pok%C3%A9mon)" title="Porygon2 (Pokémon)">Porygon2</a>
                    </td>
                    <td style="background:#FFFFFF"> 180
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>234</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Stantler_(Pok%C3%A9mon)" title="234"><img alt="234" src="http://cdn.bulbagarden.net/upload/4/40/234MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Stantler_(Pok%C3%A9mon)" title="Stantler (Pokémon)">Stantler</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>235</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Smeargle_(Pok%C3%A9mon)" title="235"><img alt="235" src="http://cdn.bulbagarden.net/upload/7/7c/235MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Smeargle_(Pok%C3%A9mon)" title="Smeargle (Pokémon)">Smeargle</a>
                    </td>
                    <td style="background:#FFFFFF"> 88
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>236</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tyrogue_(Pok%C3%A9mon)" title="236"><img alt="236" src="http://cdn.bulbagarden.net/upload/e/ed/236MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tyrogue_(Pok%C3%A9mon)" title="Tyrogue (Pokémon)">Tyrogue</a>
                    </td>
                    <td style="background:#FFFFFF"> 42
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>237</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hitmontop_(Pok%C3%A9mon)" title="237"><img alt="237" src="http://cdn.bulbagarden.net/upload/e/ed/237MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hitmontop_(Pok%C3%A9mon)" title="Hitmontop (Pokémon)">Hitmontop</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>238</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Smoochum_(Pok%C3%A9mon)" title="238"><img alt="238" src="http://cdn.bulbagarden.net/upload/0/00/238MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Smoochum_(Pok%C3%A9mon)" title="Smoochum (Pokémon)">Smoochum</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>239</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Elekid_(Pok%C3%A9mon)" title="239"><img alt="239" src="http://cdn.bulbagarden.net/upload/b/b5/239MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Elekid_(Pok%C3%A9mon)" title="Elekid (Pokémon)">Elekid</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>240</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magby_(Pok%C3%A9mon)" title="240"><img alt="240" src="http://cdn.bulbagarden.net/upload/e/e4/240MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magby_(Pok%C3%A9mon)" title="Magby (Pokémon)">Magby</a>
                    </td>
                    <td style="background:#FFFFFF"> 73
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>241</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Miltank_(Pok%C3%A9mon)" title="241"><img alt="241" src="http://cdn.bulbagarden.net/upload/c/ce/241MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Miltank_(Pok%C3%A9mon)" title="Miltank (Pokémon)">Miltank</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>242</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Blissey_(Pok%C3%A9mon)" title="242"><img alt="242" src="http://cdn.bulbagarden.net/upload/f/f8/242MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Blissey_(Pok%C3%A9mon)" title="Blissey (Pokémon)">Blissey</a>
                    </td>
                    <td style="background:#FFFFFF"> 608
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>243</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Raikou_(Pok%C3%A9mon)" title="243"><img alt="243" src="http://cdn.bulbagarden.net/upload/8/80/243MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Raikou_(Pok%C3%A9mon)" title="Raikou (Pokémon)">Raikou</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>244</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Entei_(Pok%C3%A9mon)" title="244"><img alt="244" src="http://cdn.bulbagarden.net/upload/4/4e/244MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Entei_(Pok%C3%A9mon)" title="Entei (Pokémon)">Entei</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>245</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Suicune_(Pok%C3%A9mon)" title="245"><img alt="245" src="http://cdn.bulbagarden.net/upload/e/ea/245MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Suicune_(Pok%C3%A9mon)" title="Suicune (Pokémon)">Suicune</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>246</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Larvitar_(Pok%C3%A9mon)" title="246"><img alt="246" src="http://cdn.bulbagarden.net/upload/8/85/246MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Larvitar_(Pok%C3%A9mon)" title="Larvitar (Pokémon)">Larvitar</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>247</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pupitar_(Pok%C3%A9mon)" title="247"><img alt="247" src="http://cdn.bulbagarden.net/upload/f/f9/247MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pupitar_(Pok%C3%A9mon)" title="Pupitar (Pokémon)">Pupitar</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>248</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tyranitar_(Pok%C3%A9mon)" title="248"><img alt="248" src="http://cdn.bulbagarden.net/upload/0/0f/248MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tyranitar_(Pok%C3%A9mon)" title="Tyranitar (Pokémon)">Tyranitar</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>249</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lugia_(Pok%C3%A9mon)" title="249"><img alt="249" src="http://cdn.bulbagarden.net/upload/c/c8/249MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lugia_(Pok%C3%A9mon)" title="Lugia (Pokémon)">Lugia</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>250</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ho-Oh_(Pok%C3%A9mon)" title="250"><img alt="250" src="http://cdn.bulbagarden.net/upload/e/ee/250MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ho-Oh_(Pok%C3%A9mon)" title="Ho-Oh (Pokémon)">Ho-Oh</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>251</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Celebi_(Pok%C3%A9mon)" title="251"><img alt="251" src="http://cdn.bulbagarden.net/upload/5/5a/251MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Celebi_(Pok%C3%A9mon)" title="Celebi (Pokémon)">Celebi</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>252</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Treecko_(Pok%C3%A9mon)" title="252"><img alt="252" src="http://cdn.bulbagarden.net/upload/c/cf/252MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Treecko_(Pok%C3%A9mon)" title="Treecko (Pokémon)">Treecko</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>253</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Grovyle_(Pok%C3%A9mon)" title="253"><img alt="253" src="http://cdn.bulbagarden.net/upload/a/a5/253MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Grovyle_(Pok%C3%A9mon)" title="Grovyle (Pokémon)">Grovyle</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>254</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sceptile_(Pok%C3%A9mon)" title="254"><img alt="254" src="http://cdn.bulbagarden.net/upload/f/ff/254MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sceptile_(Pok%C3%A9mon)" title="Sceptile (Pokémon)">Sceptile</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>255</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Torchic_(Pok%C3%A9mon)" title="255"><img alt="255" src="http://cdn.bulbagarden.net/upload/d/d5/255MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Torchic_(Pok%C3%A9mon)" title="Torchic (Pokémon)">Torchic</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>256</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Combusken_(Pok%C3%A9mon)" title="256"><img alt="256" src="http://cdn.bulbagarden.net/upload/4/4d/256MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Combusken_(Pok%C3%A9mon)" title="Combusken (Pokémon)">Combusken</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>257</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Blaziken_(Pok%C3%A9mon)" title="257"><img alt="257" src="http://cdn.bulbagarden.net/upload/3/3e/257MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Blaziken_(Pok%C3%A9mon)" title="Blaziken (Pokémon)">Blaziken</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>258</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mudkip_(Pok%C3%A9mon)" title="258"><img alt="258" src="http://cdn.bulbagarden.net/upload/1/19/258MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mudkip_(Pok%C3%A9mon)" title="Mudkip (Pokémon)">Mudkip</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>259</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Marshtomp_(Pok%C3%A9mon)" title="259"><img alt="259" src="http://cdn.bulbagarden.net/upload/2/21/259MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Marshtomp_(Pok%C3%A9mon)" title="Marshtomp (Pokémon)">Marshtomp</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>260</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swampert_(Pok%C3%A9mon)" title="260"><img alt="260" src="http://cdn.bulbagarden.net/upload/a/a6/260MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swampert_(Pok%C3%A9mon)" title="Swampert (Pokémon)">Swampert</a>
                    </td>
                    <td style="background:#FFFFFF"> 241
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>261</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Poochyena_(Pok%C3%A9mon)" title="261"><img alt="261" src="http://cdn.bulbagarden.net/upload/5/5c/261MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Poochyena_(Pok%C3%A9mon)" title="Poochyena (Pokémon)">Poochyena</a>
                    </td>
                    <td style="background:#FFFFFF"> 44
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>262</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mightyena_(Pok%C3%A9mon)" title="262"><img alt="262" src="http://cdn.bulbagarden.net/upload/4/4d/262MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mightyena_(Pok%C3%A9mon)" title="Mightyena (Pokémon)">Mightyena</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>263</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zigzagoon_(Pok%C3%A9mon)" title="263"><img alt="263" src="http://cdn.bulbagarden.net/upload/a/a5/263MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zigzagoon_(Pok%C3%A9mon)" title="Zigzagoon (Pokémon)">Zigzagoon</a>
                    </td>
                    <td style="background:#FFFFFF"> 48
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>264</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Linoone_(Pok%C3%A9mon)" title="264"><img alt="264" src="http://cdn.bulbagarden.net/upload/7/71/264MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Linoone_(Pok%C3%A9mon)" title="Linoone (Pokémon)">Linoone</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>265</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wurmple_(Pok%C3%A9mon)" title="265"><img alt="265" src="http://cdn.bulbagarden.net/upload/7/78/265MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wurmple_(Pok%C3%A9mon)" title="Wurmple (Pokémon)">Wurmple</a>
                    </td>
                    <td style="background:#FFFFFF"> 39
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>266</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Silcoon_(Pok%C3%A9mon)" title="266"><img alt="266" src="http://cdn.bulbagarden.net/upload/4/41/266MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Silcoon_(Pok%C3%A9mon)" title="Silcoon (Pokémon)">Silcoon</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>267</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Beautifly_(Pok%C3%A9mon)" title="267"><img alt="267" src="http://cdn.bulbagarden.net/upload/e/e9/267MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Beautifly_(Pok%C3%A9mon)" title="Beautifly (Pokémon)">Beautifly</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>268</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cascoon_(Pok%C3%A9mon)" title="268"><img alt="268" src="http://cdn.bulbagarden.net/upload/6/64/268MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cascoon_(Pok%C3%A9mon)" title="Cascoon (Pokémon)">Cascoon</a>
                    </td>
                    <td style="background:#FFFFFF"> 41
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>269</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dustox_(Pok%C3%A9mon)" title="269"><img alt="269" src="http://cdn.bulbagarden.net/upload/a/ad/269MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dustox_(Pok%C3%A9mon)" title="Dustox (Pokémon)">Dustox</a>
                    </td>
                    <td style="background:#FFFFFF"> 135
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>270</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lotad_(Pok%C3%A9mon)" title="270"><img alt="270" src="http://cdn.bulbagarden.net/upload/1/12/270MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lotad_(Pok%C3%A9mon)" title="Lotad (Pokémon)">Lotad</a>
                    </td>
                    <td style="background:#FFFFFF"> 44
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>271</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lombre_(Pok%C3%A9mon)" title="271"><img alt="271" src="http://cdn.bulbagarden.net/upload/e/e1/271MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lombre_(Pok%C3%A9mon)" title="Lombre (Pokémon)">Lombre</a>
                    </td>
                    <td style="background:#FFFFFF"> 119
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>272</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ludicolo_(Pok%C3%A9mon)" title="272"><img alt="272" src="http://cdn.bulbagarden.net/upload/a/a0/272MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ludicolo_(Pok%C3%A9mon)" title="Ludicolo (Pokémon)">Ludicolo</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>273</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Seedot_(Pok%C3%A9mon)" title="273"><img alt="273" src="http://cdn.bulbagarden.net/upload/c/cb/273MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Seedot_(Pok%C3%A9mon)" title="Seedot (Pokémon)">Seedot</a>
                    </td>
                    <td style="background:#FFFFFF"> 44
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>274</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nuzleaf_(Pok%C3%A9mon)" title="274"><img alt="274" src="http://cdn.bulbagarden.net/upload/c/c6/274MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nuzleaf_(Pok%C3%A9mon)" title="Nuzleaf (Pokémon)">Nuzleaf</a>
                    </td>
                    <td style="background:#FFFFFF"> 119
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>275</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shiftry_(Pok%C3%A9mon)" title="275"><img alt="275" src="http://cdn.bulbagarden.net/upload/3/34/275MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shiftry_(Pok%C3%A9mon)" title="Shiftry (Pokémon)">Shiftry</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>276</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Taillow_(Pok%C3%A9mon)" title="276"><img alt="276" src="http://cdn.bulbagarden.net/upload/f/f3/276MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Taillow_(Pok%C3%A9mon)" title="Taillow (Pokémon)">Taillow</a>
                    </td>
                    <td style="background:#FFFFFF"> 54
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>277</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swellow_(Pok%C3%A9mon)" title="277"><img alt="277" src="http://cdn.bulbagarden.net/upload/1/1a/277MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swellow_(Pok%C3%A9mon)" title="Swellow (Pokémon)">Swellow</a>
                    </td>
                    <td style="background:#FFFFFF"> 151
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>278</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wingull_(Pok%C3%A9mon)" title="278"><img alt="278" src="http://cdn.bulbagarden.net/upload/b/b4/278MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wingull_(Pok%C3%A9mon)" title="Wingull (Pokémon)">Wingull</a>
                    </td>
                    <td style="background:#FFFFFF"> 54
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>279</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pelipper_(Pok%C3%A9mon)" title="279"><img alt="279" src="http://cdn.bulbagarden.net/upload/9/96/279MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pelipper_(Pok%C3%A9mon)" title="Pelipper (Pokémon)">Pelipper</a>
                    </td>
                    <td style="background:#FFFFFF"> 151
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>280</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ralts_(Pok%C3%A9mon)" title="280"><img alt="280" src="http://cdn.bulbagarden.net/upload/3/32/280MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ralts_(Pok%C3%A9mon)" title="Ralts (Pokémon)">Ralts</a>
                    </td>
                    <td style="background:#FFFFFF"> 40
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>281</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kirlia_(Pok%C3%A9mon)" title="281"><img alt="281" src="http://cdn.bulbagarden.net/upload/7/77/281MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kirlia_(Pok%C3%A9mon)" title="Kirlia (Pokémon)">Kirlia</a>
                    </td>
                    <td style="background:#FFFFFF"> 97
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>282</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gardevoir_(Pok%C3%A9mon)" title="282"><img alt="282" src="http://cdn.bulbagarden.net/upload/4/4a/282MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gardevoir_(Pok%C3%A9mon)" title="Gardevoir (Pokémon)">Gardevoir</a>
                    </td>
                    <td style="background:#FFFFFF"> 233
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>283</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Surskit_(Pok%C3%A9mon)" title="283"><img alt="283" src="http://cdn.bulbagarden.net/upload/1/1f/283MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Surskit_(Pok%C3%A9mon)" title="Surskit (Pokémon)">Surskit</a>
                    </td>
                    <td style="background:#FFFFFF"> 54
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>284</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Masquerain_(Pok%C3%A9mon)" title="284"><img alt="284" src="http://cdn.bulbagarden.net/upload/a/af/284MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Masquerain_(Pok%C3%A9mon)" title="Masquerain (Pokémon)">Masquerain</a>
                    </td>
                    <td style="background:#FFFFFF"> 145
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>285</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shroomish_(Pok%C3%A9mon)" title="285"><img alt="285" src="http://cdn.bulbagarden.net/upload/8/8e/285MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shroomish_(Pok%C3%A9mon)" title="Shroomish (Pokémon)">Shroomish</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>286</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Breloom_(Pok%C3%A9mon)" title="286"><img alt="286" src="http://cdn.bulbagarden.net/upload/e/ed/286MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Breloom_(Pok%C3%A9mon)" title="Breloom (Pokémon)">Breloom</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>287</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slakoth_(Pok%C3%A9mon)" title="287"><img alt="287" src="http://cdn.bulbagarden.net/upload/6/62/287MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slakoth_(Pok%C3%A9mon)" title="Slakoth (Pokémon)">Slakoth</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>288</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vigoroth_(Pok%C3%A9mon)" title="288"><img alt="288" src="http://cdn.bulbagarden.net/upload/3/38/288MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vigoroth_(Pok%C3%A9mon)" title="Vigoroth (Pokémon)">Vigoroth</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>289</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slaking_(Pok%C3%A9mon)" title="289"><img alt="289" src="http://cdn.bulbagarden.net/upload/0/0d/289MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slaking_(Pok%C3%A9mon)" title="Slaking (Pokémon)">Slaking</a>
                    </td>
                    <td style="background:#FFFFFF"> 252
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>290</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nincada_(Pok%C3%A9mon)" title="290"><img alt="290" src="http://cdn.bulbagarden.net/upload/9/9f/290MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nincada_(Pok%C3%A9mon)" title="Nincada (Pokémon)">Nincada</a>
                    </td>
                    <td style="background:#FFFFFF"> 53
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>291</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ninjask_(Pok%C3%A9mon)" title="291"><img alt="291" src="http://cdn.bulbagarden.net/upload/5/54/291MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ninjask_(Pok%C3%A9mon)" title="Ninjask (Pokémon)">Ninjask</a>
                    </td>
                    <td style="background:#FFFFFF"> 160
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>292</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shedinja_(Pok%C3%A9mon)" title="292"><img alt="292" src="http://cdn.bulbagarden.net/upload/3/30/292MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shedinja_(Pok%C3%A9mon)" title="Shedinja (Pokémon)">Shedinja</a>
                    </td>
                    <td style="background:#FFFFFF"> 83
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>293</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Whismur_(Pok%C3%A9mon)" title="293"><img alt="293" src="http://cdn.bulbagarden.net/upload/5/54/293MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Whismur_(Pok%C3%A9mon)" title="Whismur (Pokémon)">Whismur</a>
                    </td>
                    <td style="background:#FFFFFF"> 48
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>294</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Loudred_(Pok%C3%A9mon)" title="294"><img alt="294" src="http://cdn.bulbagarden.net/upload/7/73/294MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Loudred_(Pok%C3%A9mon)" title="Loudred (Pokémon)">Loudred</a>
                    </td>
                    <td style="background:#FFFFFF"> 126
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>295</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Exploud_(Pok%C3%A9mon)" title="295"><img alt="295" src="http://cdn.bulbagarden.net/upload/c/c2/295MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Exploud_(Pok%C3%A9mon)" title="Exploud (Pokémon)">Exploud</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>296</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Makuhita_(Pok%C3%A9mon)" title="296"><img alt="296" src="http://cdn.bulbagarden.net/upload/7/7e/296MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Makuhita_(Pok%C3%A9mon)" title="Makuhita (Pokémon)">Makuhita</a>
                    </td>
                    <td style="background:#FFFFFF"> 47
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>297</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hariyama_(Pok%C3%A9mon)" title="297"><img alt="297" src="http://cdn.bulbagarden.net/upload/d/dd/297MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hariyama_(Pok%C3%A9mon)" title="Hariyama (Pokémon)">Hariyama</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>298</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Azurill_(Pok%C3%A9mon)" title="298"><img alt="298" src="http://cdn.bulbagarden.net/upload/5/52/298MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Azurill_(Pok%C3%A9mon)" title="Azurill (Pokémon)">Azurill</a>
                    </td>
                    <td style="background:#FFFFFF"> 38
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>299</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Nosepass_(Pok%C3%A9mon)" title="299"><img alt="299" src="http://cdn.bulbagarden.net/upload/a/a6/299MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Nosepass_(Pok%C3%A9mon)" title="Nosepass (Pokémon)">Nosepass</a>
                    </td>
                    <td style="background:#FFFFFF"> 75
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>300</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skitty_(Pok%C3%A9mon)" title="300"><img alt="300" src="http://cdn.bulbagarden.net/upload/e/e4/300MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skitty_(Pok%C3%A9mon)" title="Skitty (Pokémon)">Skitty</a>
                    </td>
                    <td style="background:#FFFFFF"> 52
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>301</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Delcatty_(Pok%C3%A9mon)" title="301"><img alt="301" src="http://cdn.bulbagarden.net/upload/0/0a/301MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Delcatty_(Pok%C3%A9mon)" title="Delcatty (Pokémon)">Delcatty</a>
                    </td>
                    <td style="background:#FFFFFF"> 133
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>302</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sableye_(Pok%C3%A9mon)" title="302"><img alt="302" src="http://cdn.bulbagarden.net/upload/6/60/302MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sableye_(Pok%C3%A9mon)" title="Sableye (Pokémon)">Sableye</a>
                    </td>
                    <td style="background:#FFFFFF"> 133
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>303</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mawile_(Pok%C3%A9mon)" title="303"><img alt="303" src="http://cdn.bulbagarden.net/upload/5/53/303MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mawile_(Pok%C3%A9mon)" title="Mawile (Pokémon)">Mawile</a>
                    </td>
                    <td style="background:#FFFFFF"> 133
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>304</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aron_(Pok%C3%A9mon)" title="304"><img alt="304" src="http://cdn.bulbagarden.net/upload/c/c5/304MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aron_(Pok%C3%A9mon)" title="Aron (Pokémon)">Aron</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>305</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lairon_(Pok%C3%A9mon)" title="305"><img alt="305" src="http://cdn.bulbagarden.net/upload/3/3e/305MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lairon_(Pok%C3%A9mon)" title="Lairon (Pokémon)">Lairon</a>
                    </td>
                    <td style="background:#FFFFFF"> 151
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>306</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aggron_(Pok%C3%A9mon)" title="306"><img alt="306" src="http://cdn.bulbagarden.net/upload/d/d5/306MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aggron_(Pok%C3%A9mon)" title="Aggron (Pokémon)">Aggron</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>307</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Meditite_(Pok%C3%A9mon)" title="307"><img alt="307" src="http://cdn.bulbagarden.net/upload/6/67/307MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Meditite_(Pok%C3%A9mon)" title="Meditite (Pokémon)">Meditite</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>308</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Medicham_(Pok%C3%A9mon)" title="308"><img alt="308" src="http://cdn.bulbagarden.net/upload/0/0b/308MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Medicham_(Pok%C3%A9mon)" title="Medicham (Pokémon)">Medicham</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>309</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Electrike_(Pok%C3%A9mon)" title="309"><img alt="309" src="http://cdn.bulbagarden.net/upload/6/62/309MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Electrike_(Pok%C3%A9mon)" title="Electrike (Pokémon)">Electrike</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>310</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Manectric_(Pok%C3%A9mon)" title="310"><img alt="310" src="http://cdn.bulbagarden.net/upload/0/04/310MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Manectric_(Pok%C3%A9mon)" title="Manectric (Pokémon)">Manectric</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>311</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Plusle_(Pok%C3%A9mon)" title="311"><img alt="311" src="http://cdn.bulbagarden.net/upload/e/e7/311MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Plusle_(Pok%C3%A9mon)" title="Plusle (Pokémon)">Plusle</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>312</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Minun_(Pok%C3%A9mon)" title="312"><img alt="312" src="http://cdn.bulbagarden.net/upload/9/94/312MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Minun_(Pok%C3%A9mon)" title="Minun (Pokémon)">Minun</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>313</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Volbeat_(Pok%C3%A9mon)" title="313"><img alt="313" src="http://cdn.bulbagarden.net/upload/b/bd/313MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Volbeat_(Pok%C3%A9mon)" title="Volbeat (Pokémon)">Volbeat</a>
                    </td>
                    <td style="background:#FFFFFF"> 140
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>314</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Illumise_(Pok%C3%A9mon)" title="314"><img alt="314" src="http://cdn.bulbagarden.net/upload/4/41/314MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Illumise_(Pok%C3%A9mon)" title="Illumise (Pokémon)">Illumise</a>
                    </td>
                    <td style="background:#FFFFFF"> 140
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>315</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Roselia_(Pok%C3%A9mon)" title="315"><img alt="315" src="http://cdn.bulbagarden.net/upload/b/bf/315MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Roselia_(Pok%C3%A9mon)" title="Roselia (Pokémon)">Roselia</a>
                    </td>
                    <td style="background:#FFFFFF"> 140
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>316</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gulpin_(Pok%C3%A9mon)" title="316"><img alt="316" src="http://cdn.bulbagarden.net/upload/0/03/316MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gulpin_(Pok%C3%A9mon)" title="Gulpin (Pokémon)">Gulpin</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>317</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swalot_(Pok%C3%A9mon)" title="317"><img alt="317" src="http://cdn.bulbagarden.net/upload/a/a3/317MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swalot_(Pok%C3%A9mon)" title="Swalot (Pokémon)">Swalot</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>318</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Carvanha_(Pok%C3%A9mon)" title="318"><img alt="318" src="http://cdn.bulbagarden.net/upload/c/ca/318MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Carvanha_(Pok%C3%A9mon)" title="Carvanha (Pokémon)">Carvanha</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>319</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sharpedo_(Pok%C3%A9mon)" title="319"><img alt="319" src="http://cdn.bulbagarden.net/upload/e/e2/319MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sharpedo_(Pok%C3%A9mon)" title="Sharpedo (Pokémon)">Sharpedo</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>320</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wailmer_(Pok%C3%A9mon)" title="320"><img alt="320" src="http://cdn.bulbagarden.net/upload/5/55/320MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wailmer_(Pok%C3%A9mon)" title="Wailmer (Pokémon)">Wailmer</a>
                    </td>
                    <td style="background:#FFFFFF"> 80
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>321</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wailord_(Pok%C3%A9mon)" title="321"><img alt="321" src="http://cdn.bulbagarden.net/upload/e/ec/321MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wailord_(Pok%C3%A9mon)" title="Wailord (Pokémon)">Wailord</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>322</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Numel_(Pok%C3%A9mon)" title="322"><img alt="322" src="http://cdn.bulbagarden.net/upload/5/5c/322MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Numel_(Pok%C3%A9mon)" title="Numel (Pokémon)">Numel</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>323</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Camerupt_(Pok%C3%A9mon)" title="323"><img alt="323" src="http://cdn.bulbagarden.net/upload/6/6f/323MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Camerupt_(Pok%C3%A9mon)" title="Camerupt (Pokémon)">Camerupt</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>324</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Torkoal_(Pok%C3%A9mon)" title="324"><img alt="324" src="http://cdn.bulbagarden.net/upload/3/39/324MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Torkoal_(Pok%C3%A9mon)" title="Torkoal (Pokémon)">Torkoal</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>325</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spoink_(Pok%C3%A9mon)" title="325"><img alt="325" src="http://cdn.bulbagarden.net/upload/a/a7/325MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spoink_(Pok%C3%A9mon)" title="Spoink (Pokémon)">Spoink</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>326</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Grumpig_(Pok%C3%A9mon)" title="326"><img alt="326" src="http://cdn.bulbagarden.net/upload/b/b8/326MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Grumpig_(Pok%C3%A9mon)" title="Grumpig (Pokémon)">Grumpig</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>327</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spinda_(Pok%C3%A9mon)" title="327"><img alt="327" src="http://cdn.bulbagarden.net/upload/c/c2/327MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spinda_(Pok%C3%A9mon)" title="Spinda (Pokémon)">Spinda</a>
                    </td>
                    <td style="background:#FFFFFF"> 126
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>328</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Trapinch_(Pok%C3%A9mon)" title="328"><img alt="328" src="http://cdn.bulbagarden.net/upload/f/f8/328MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Trapinch_(Pok%C3%A9mon)" title="Trapinch (Pokémon)">Trapinch</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>329</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vibrava_(Pok%C3%A9mon)" title="329"><img alt="329" src="http://cdn.bulbagarden.net/upload/6/6c/329MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vibrava_(Pok%C3%A9mon)" title="Vibrava (Pokémon)">Vibrava</a>
                    </td>
                    <td style="background:#FFFFFF"> 119
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>330</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Flygon_(Pok%C3%A9mon)" title="330"><img alt="330" src="http://cdn.bulbagarden.net/upload/e/eb/330MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Flygon_(Pok%C3%A9mon)" title="Flygon (Pokémon)">Flygon</a>
                    </td>
                    <td style="background:#FFFFFF"> 234
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>331</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cacnea_(Pok%C3%A9mon)" title="331"><img alt="331" src="http://cdn.bulbagarden.net/upload/3/3a/331MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cacnea_(Pok%C3%A9mon)" title="Cacnea (Pokémon)">Cacnea</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>332</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cacturne_(Pok%C3%A9mon)" title="332"><img alt="332" src="http://cdn.bulbagarden.net/upload/9/95/332MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cacturne_(Pok%C3%A9mon)" title="Cacturne (Pokémon)">Cacturne</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>333</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swablu_(Pok%C3%A9mon)" title="333"><img alt="333" src="http://cdn.bulbagarden.net/upload/6/61/333MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swablu_(Pok%C3%A9mon)" title="Swablu (Pokémon)">Swablu</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>334</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Altaria_(Pok%C3%A9mon)" title="334"><img alt="334" src="http://cdn.bulbagarden.net/upload/a/a2/334MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Altaria_(Pok%C3%A9mon)" title="Altaria (Pokémon)">Altaria</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>335</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zangoose_(Pok%C3%A9mon)" title="335"><img alt="335" src="http://cdn.bulbagarden.net/upload/2/2c/335MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zangoose_(Pok%C3%A9mon)" title="Zangoose (Pokémon)">Zangoose</a>
                    </td>
                    <td style="background:#FFFFFF"> 160
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>336</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Seviper_(Pok%C3%A9mon)" title="336"><img alt="336" src="http://cdn.bulbagarden.net/upload/b/b4/336MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Seviper_(Pok%C3%A9mon)" title="Seviper (Pokémon)">Seviper</a>
                    </td>
                    <td style="background:#FFFFFF"> 160
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>337</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lunatone_(Pok%C3%A9mon)" title="337"><img alt="337" src="http://cdn.bulbagarden.net/upload/d/d5/337MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lunatone_(Pok%C3%A9mon)" title="Lunatone (Pokémon)">Lunatone</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>338</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Solrock_(Pok%C3%A9mon)" title="338"><img alt="338" src="http://cdn.bulbagarden.net/upload/1/1e/338MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Solrock_(Pok%C3%A9mon)" title="Solrock (Pokémon)">Solrock</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>339</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Barboach_(Pok%C3%A9mon)" title="339"><img alt="339" src="http://cdn.bulbagarden.net/upload/9/9c/339MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Barboach_(Pok%C3%A9mon)" title="Barboach (Pokémon)">Barboach</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>340</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Whiscash_(Pok%C3%A9mon)" title="340"><img alt="340" src="http://cdn.bulbagarden.net/upload/7/76/340MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Whiscash_(Pok%C3%A9mon)" title="Whiscash (Pokémon)">Whiscash</a>
                    </td>
                    <td style="background:#FFFFFF"> 164
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>341</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Corphish_(Pok%C3%A9mon)" title="341"><img alt="341" src="http://cdn.bulbagarden.net/upload/5/5a/341MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Corphish_(Pok%C3%A9mon)" title="Corphish (Pokémon)">Corphish</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>342</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Crawdaunt_(Pok%C3%A9mon)" title="342"><img alt="342" src="http://cdn.bulbagarden.net/upload/e/e4/342MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Crawdaunt_(Pok%C3%A9mon)" title="Crawdaunt (Pokémon)">Crawdaunt</a>
                    </td>
                    <td style="background:#FFFFFF"> 164
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>343</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Baltoy_(Pok%C3%A9mon)" title="343"><img alt="343" src="http://cdn.bulbagarden.net/upload/6/6e/343MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Baltoy_(Pok%C3%A9mon)" title="Baltoy (Pokémon)">Baltoy</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>344</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Claydol_(Pok%C3%A9mon)" title="344"><img alt="344" src="http://cdn.bulbagarden.net/upload/7/75/344MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Claydol_(Pok%C3%A9mon)" title="Claydol (Pokémon)">Claydol</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>345</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lileep_(Pok%C3%A9mon)" title="345"><img alt="345" src="http://cdn.bulbagarden.net/upload/8/88/345MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lileep_(Pok%C3%A9mon)" title="Lileep (Pokémon)">Lileep</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>346</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cradily_(Pok%C3%A9mon)" title="346"><img alt="346" src="http://cdn.bulbagarden.net/upload/1/16/346MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cradily_(Pok%C3%A9mon)" title="Cradily (Pokémon)">Cradily</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>347</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Anorith_(Pok%C3%A9mon)" title="347"><img alt="347" src="http://cdn.bulbagarden.net/upload/b/b2/347MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Anorith_(Pok%C3%A9mon)" title="Anorith (Pokémon)">Anorith</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>348</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Armaldo_(Pok%C3%A9mon)" title="348"><img alt="348" src="http://cdn.bulbagarden.net/upload/6/69/348MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Armaldo_(Pok%C3%A9mon)" title="Armaldo (Pokémon)">Armaldo</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>349</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Feebas_(Pok%C3%A9mon)" title="349"><img alt="349" src="http://cdn.bulbagarden.net/upload/7/7d/349MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Feebas_(Pok%C3%A9mon)" title="Feebas (Pokémon)">Feebas</a>
                    </td>
                    <td style="background:#FFFFFF"> 40
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>350</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Milotic_(Pok%C3%A9mon)" title="350"><img alt="350" src="http://cdn.bulbagarden.net/upload/5/5a/350MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Milotic_(Pok%C3%A9mon)" title="Milotic (Pokémon)">Milotic</a>
                    </td>
                    <td style="background:#FFFFFF"> 189
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>351</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Castform_(Pok%C3%A9mon)" title="351"><img alt="351" src="http://cdn.bulbagarden.net/upload/f/fc/351MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Castform_(Pok%C3%A9mon)" title="Castform (Pokémon)">Castform</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>352</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kecleon_(Pok%C3%A9mon)" title="352"><img alt="352" src="http://cdn.bulbagarden.net/upload/3/39/352MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kecleon_(Pok%C3%A9mon)" title="Kecleon (Pokémon)">Kecleon</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>353</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shuppet_(Pok%C3%A9mon)" title="353"><img alt="353" src="http://cdn.bulbagarden.net/upload/f/fd/353MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shuppet_(Pok%C3%A9mon)" title="Shuppet (Pokémon)">Shuppet</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>354</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Banette_(Pok%C3%A9mon)" title="354"><img alt="354" src="http://cdn.bulbagarden.net/upload/c/c8/354MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Banette_(Pok%C3%A9mon)" title="Banette (Pokémon)">Banette</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>355</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Duskull_(Pok%C3%A9mon)" title="355"><img alt="355" src="http://cdn.bulbagarden.net/upload/2/2d/355MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Duskull_(Pok%C3%A9mon)" title="Duskull (Pokémon)">Duskull</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>356</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dusclops_(Pok%C3%A9mon)" title="356"><img alt="356" src="http://cdn.bulbagarden.net/upload/c/cd/356MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dusclops_(Pok%C3%A9mon)" title="Dusclops (Pokémon)">Dusclops</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>357</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tropius_(Pok%C3%A9mon)" title="357"><img alt="357" src="http://cdn.bulbagarden.net/upload/0/0b/357MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tropius_(Pok%C3%A9mon)" title="Tropius (Pokémon)">Tropius</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>358</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chimecho_(Pok%C3%A9mon)" title="358"><img alt="358" src="http://cdn.bulbagarden.net/upload/7/78/358MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chimecho_(Pok%C3%A9mon)" title="Chimecho (Pokémon)">Chimecho</a>
                    </td>
                    <td style="background:#FFFFFF"> 149
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>359</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Absol_(Pok%C3%A9mon)" title="359"><img alt="359" src="http://cdn.bulbagarden.net/upload/7/7c/359MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Absol_(Pok%C3%A9mon)" title="Absol (Pokémon)">Absol</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>360</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wynaut_(Pok%C3%A9mon)" title="360"><img alt="360" src="http://cdn.bulbagarden.net/upload/4/44/360MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wynaut_(Pok%C3%A9mon)" title="Wynaut (Pokémon)">Wynaut</a>
                    </td>
                    <td style="background:#FFFFFF"> 52
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>361</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Snorunt_(Pok%C3%A9mon)" title="361"><img alt="361" src="http://cdn.bulbagarden.net/upload/6/66/361MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Snorunt_(Pok%C3%A9mon)" title="Snorunt (Pokémon)">Snorunt</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>362</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Glalie_(Pok%C3%A9mon)" title="362"><img alt="362" src="http://cdn.bulbagarden.net/upload/d/d0/362MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Glalie_(Pok%C3%A9mon)" title="Glalie (Pokémon)">Glalie</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>363</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spheal_(Pok%C3%A9mon)" title="363"><img alt="363" src="http://cdn.bulbagarden.net/upload/4/43/363MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spheal_(Pok%C3%A9mon)" title="Spheal (Pokémon)">Spheal</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>364</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sealeo_(Pok%C3%A9mon)" title="364"><img alt="364" src="http://cdn.bulbagarden.net/upload/9/92/364MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sealeo_(Pok%C3%A9mon)" title="Sealeo (Pokémon)">Sealeo</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>365</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Walrein_(Pok%C3%A9mon)" title="365"><img alt="365" src="http://cdn.bulbagarden.net/upload/6/66/365MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Walrein_(Pok%C3%A9mon)" title="Walrein (Pokémon)">Walrein</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>366</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Clamperl_(Pok%C3%A9mon)" title="366"><img alt="366" src="http://cdn.bulbagarden.net/upload/b/bb/366MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Clamperl_(Pok%C3%A9mon)" title="Clamperl (Pokémon)">Clamperl</a>
                    </td>
                    <td style="background:#FFFFFF"> 69
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>367</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Huntail_(Pok%C3%A9mon)" title="367"><img alt="367" src="http://cdn.bulbagarden.net/upload/2/2e/367MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Huntail_(Pok%C3%A9mon)" title="Huntail (Pokémon)">Huntail</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>368</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gorebyss_(Pok%C3%A9mon)" title="368"><img alt="368" src="http://cdn.bulbagarden.net/upload/d/dc/368MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gorebyss_(Pok%C3%A9mon)" title="Gorebyss (Pokémon)">Gorebyss</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>369</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Relicanth_(Pok%C3%A9mon)" title="369"><img alt="369" src="http://cdn.bulbagarden.net/upload/6/6a/369MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Relicanth_(Pok%C3%A9mon)" title="Relicanth (Pokémon)">Relicanth</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>370</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Luvdisc_(Pok%C3%A9mon)" title="370"><img alt="370" src="http://cdn.bulbagarden.net/upload/d/d1/370MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Luvdisc_(Pok%C3%A9mon)" title="Luvdisc (Pokémon)">Luvdisc</a>
                    </td>
                    <td style="background:#FFFFFF"> 116
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>371</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bagon_(Pok%C3%A9mon)" title="371"><img alt="371" src="http://cdn.bulbagarden.net/upload/f/fe/371MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bagon_(Pok%C3%A9mon)" title="Bagon (Pokémon)">Bagon</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>372</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shelgon_(Pok%C3%A9mon)" title="372"><img alt="372" src="http://cdn.bulbagarden.net/upload/2/25/372MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shelgon_(Pok%C3%A9mon)" title="Shelgon (Pokémon)">Shelgon</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>373</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Salamence_(Pok%C3%A9mon)" title="373"><img alt="373" src="http://cdn.bulbagarden.net/upload/8/8c/373MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Salamence_(Pok%C3%A9mon)" title="Salamence (Pokémon)">Salamence</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>374</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Beldum_(Pok%C3%A9mon)" title="374"><img alt="374" src="http://cdn.bulbagarden.net/upload/c/c8/374MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Beldum_(Pok%C3%A9mon)" title="Beldum (Pokémon)">Beldum</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>375</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Metang_(Pok%C3%A9mon)" title="375"><img alt="375" src="http://cdn.bulbagarden.net/upload/2/22/375MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Metang_(Pok%C3%A9mon)" title="Metang (Pokémon)">Metang</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>376</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Metagross_(Pok%C3%A9mon)" title="376"><img alt="376" src="http://cdn.bulbagarden.net/upload/2/2d/376MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Metagross_(Pok%C3%A9mon)" title="Metagross (Pokémon)">Metagross</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>377</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Regirock_(Pok%C3%A9mon)" title="377"><img alt="377" src="http://cdn.bulbagarden.net/upload/6/6c/377MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Regirock_(Pok%C3%A9mon)" title="Regirock (Pokémon)">Regirock</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>378</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Regice_(Pok%C3%A9mon)" title="378"><img alt="378" src="http://cdn.bulbagarden.net/upload/9/99/378MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Regice_(Pok%C3%A9mon)" title="Regice (Pokémon)">Regice</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>379</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Registeel_(Pok%C3%A9mon)" title="379"><img alt="379" src="http://cdn.bulbagarden.net/upload/2/2e/379MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Registeel_(Pok%C3%A9mon)" title="Registeel (Pokémon)">Registeel</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>380</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Latias_(Pok%C3%A9mon)" title="380"><img alt="380" src="http://cdn.bulbagarden.net/upload/8/84/380MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Latias_(Pok%C3%A9mon)" title="Latias (Pokémon)">Latias</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>381</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Latios_(Pok%C3%A9mon)" title="381"><img alt="381" src="http://cdn.bulbagarden.net/upload/a/a4/381MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Latios_(Pok%C3%A9mon)" title="Latios (Pokémon)">Latios</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>382</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kyogre_(Pok%C3%A9mon)" title="382"><img alt="382" src="http://cdn.bulbagarden.net/upload/1/11/382MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kyogre_(Pok%C3%A9mon)" title="Kyogre (Pokémon)">Kyogre</a>
                    </td>
                    <td style="background:#FFFFFF"> 302
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>383</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Groudon_(Pok%C3%A9mon)" title="383"><img alt="383" src="http://cdn.bulbagarden.net/upload/b/bc/383MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Groudon_(Pok%C3%A9mon)" title="Groudon (Pokémon)">Groudon</a>
                    </td>
                    <td style="background:#FFFFFF"> 302
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>384</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rayquaza_(Pok%C3%A9mon)" title="384"><img alt="384" src="http://cdn.bulbagarden.net/upload/9/90/384MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rayquaza_(Pok%C3%A9mon)" title="Rayquaza (Pokémon)">Rayquaza</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>385</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Jirachi_(Pok%C3%A9mon)" title="385"><img alt="385" src="http://cdn.bulbagarden.net/upload/9/9e/385MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Jirachi_(Pok%C3%A9mon)" title="Jirachi (Pokémon)">Jirachi</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>386</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="386"><img alt="386" src="http://cdn.bulbagarden.net/upload/8/86/386MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="Deoxys (Pokémon)">Deoxys</a> <small>(Normal Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>386</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="386A"><img alt="386A" src="http://cdn.bulbagarden.net/upload/0/07/386AMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="Deoxys (Pokémon)">Deoxys</a> <small>(Attack Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>386</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="386D"><img alt="386D" src="http://cdn.bulbagarden.net/upload/2/20/386DMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="Deoxys (Pokémon)">Deoxys</a> <small>(Defense Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>386</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="386S"><img alt="386S" src="http://cdn.bulbagarden.net/upload/f/fa/386SMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Deoxys_(Pok%C3%A9mon)" title="Deoxys (Pokémon)">Deoxys</a> <small>(Speed Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>387</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Turtwig_(Pok%C3%A9mon)" title="387"><img alt="387" src="http://cdn.bulbagarden.net/upload/2/27/387MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Turtwig_(Pok%C3%A9mon)" title="Turtwig (Pokémon)">Turtwig</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>388</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Grotle_(Pok%C3%A9mon)" title="388"><img alt="388" src="http://cdn.bulbagarden.net/upload/4/40/388MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Grotle_(Pok%C3%A9mon)" title="Grotle (Pokémon)">Grotle</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>389</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Torterra_(Pok%C3%A9mon)" title="389"><img alt="389" src="http://cdn.bulbagarden.net/upload/1/1f/389MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Torterra_(Pok%C3%A9mon)" title="Torterra (Pokémon)">Torterra</a>
                    </td>
                    <td style="background:#FFFFFF"> 236
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>390</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chimchar_(Pok%C3%A9mon)" title="390"><img alt="390" src="http://cdn.bulbagarden.net/upload/9/93/390MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chimchar_(Pok%C3%A9mon)" title="Chimchar (Pokémon)">Chimchar</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>391</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Monferno_(Pok%C3%A9mon)" title="391"><img alt="391" src="http://cdn.bulbagarden.net/upload/7/70/391MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Monferno_(Pok%C3%A9mon)" title="Monferno (Pokémon)">Monferno</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>392</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Infernape_(Pok%C3%A9mon)" title="392"><img alt="392" src="http://cdn.bulbagarden.net/upload/f/f5/392MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Infernape_(Pok%C3%A9mon)" title="Infernape (Pokémon)">Infernape</a>
                    </td>
                    <td style="background:#FFFFFF"> 240
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>393</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Piplup_(Pok%C3%A9mon)" title="393"><img alt="393" src="http://cdn.bulbagarden.net/upload/8/85/393MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Piplup_(Pok%C3%A9mon)" title="Piplup (Pokémon)">Piplup</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>394</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Prinplup_(Pok%C3%A9mon)" title="394"><img alt="394" src="http://cdn.bulbagarden.net/upload/a/a3/394MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Prinplup_(Pok%C3%A9mon)" title="Prinplup (Pokémon)">Prinplup</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>395</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Empoleon_(Pok%C3%A9mon)" title="395"><img alt="395" src="http://cdn.bulbagarden.net/upload/f/ff/395MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Empoleon_(Pok%C3%A9mon)" title="Empoleon (Pokémon)">Empoleon</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>396</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Starly_(Pok%C3%A9mon)" title="396"><img alt="396" src="http://cdn.bulbagarden.net/upload/1/16/396MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Starly_(Pok%C3%A9mon)" title="Starly (Pokémon)">Starly</a>
                    </td>
                    <td style="background:#FFFFFF"> 49
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>397</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Staravia_(Pok%C3%A9mon)" title="397"><img alt="397" src="http://cdn.bulbagarden.net/upload/e/e2/397MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Staravia_(Pok%C3%A9mon)" title="Staravia (Pokémon)">Staravia</a>
                    </td>
                    <td style="background:#FFFFFF"> 119
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>398</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Staraptor_(Pok%C3%A9mon)" title="398"><img alt="398" src="http://cdn.bulbagarden.net/upload/5/5f/398MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Staraptor_(Pok%C3%A9mon)" title="Staraptor (Pokémon)">Staraptor</a>
                    </td>
                    <td style="background:#FFFFFF"> 214
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>399</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bidoof_(Pok%C3%A9mon)" title="399"><img alt="399" src="http://cdn.bulbagarden.net/upload/b/bc/399MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bidoof_(Pok%C3%A9mon)" title="Bidoof (Pokémon)">Bidoof</a>
                    </td>
                    <td style="background:#FFFFFF"> 50
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>400</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bibarel_(Pok%C3%A9mon)" title="400"><img alt="400" src="http://cdn.bulbagarden.net/upload/b/b1/400MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bibarel_(Pok%C3%A9mon)" title="Bibarel (Pokémon)">Bibarel</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>401</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kricketot_(Pok%C3%A9mon)" title="401"><img alt="401" src="http://cdn.bulbagarden.net/upload/f/f9/401MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kricketot_(Pok%C3%A9mon)" title="Kricketot (Pokémon)">Kricketot</a>
                    </td>
                    <td style="background:#FFFFFF"> 39
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>402</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kricketune_(Pok%C3%A9mon)" title="402"><img alt="402" src="http://cdn.bulbagarden.net/upload/1/18/402MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kricketune_(Pok%C3%A9mon)" title="Kricketune (Pokémon)">Kricketune</a>
                    </td>
                    <td style="background:#FFFFFF"> 134
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>403</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shinx_(Pok%C3%A9mon)" title="403"><img alt="403" src="http://cdn.bulbagarden.net/upload/a/a0/403MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shinx_(Pok%C3%A9mon)" title="Shinx (Pokémon)">Shinx</a>
                    </td>
                    <td style="background:#FFFFFF"> 53
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>404</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Luxio_(Pok%C3%A9mon)" title="404"><img alt="404" src="http://cdn.bulbagarden.net/upload/e/e3/404MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Luxio_(Pok%C3%A9mon)" title="Luxio (Pokémon)">Luxio</a>
                    </td>
                    <td style="background:#FFFFFF"> 127
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>405</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Luxray_(Pok%C3%A9mon)" title="405"><img alt="405" src="http://cdn.bulbagarden.net/upload/8/8a/405MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Luxray_(Pok%C3%A9mon)" title="Luxray (Pokémon)">Luxray</a>
                    </td>
                    <td style="background:#FFFFFF"> 235
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>406</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Budew_(Pok%C3%A9mon)" title="406"><img alt="406" src="http://cdn.bulbagarden.net/upload/e/ef/406MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Budew_(Pok%C3%A9mon)" title="Budew (Pokémon)">Budew</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>407</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Roserade_(Pok%C3%A9mon)" title="407"><img alt="407" src="http://cdn.bulbagarden.net/upload/f/fe/407MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Roserade_(Pok%C3%A9mon)" title="Roserade (Pokémon)">Roserade</a>
                    </td>
                    <td style="background:#FFFFFF"> 227
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>408</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cranidos_(Pok%C3%A9mon)" title="408"><img alt="408" src="http://cdn.bulbagarden.net/upload/9/98/408MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cranidos_(Pok%C3%A9mon)" title="Cranidos (Pokémon)">Cranidos</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>409</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rampardos_(Pok%C3%A9mon)" title="409"><img alt="409" src="http://cdn.bulbagarden.net/upload/9/91/409MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rampardos_(Pok%C3%A9mon)" title="Rampardos (Pokémon)">Rampardos</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>410</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shieldon_(Pok%C3%A9mon)" title="410"><img alt="410" src="http://cdn.bulbagarden.net/upload/9/9e/410MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shieldon_(Pok%C3%A9mon)" title="Shieldon (Pokémon)">Shieldon</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>411</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bastiodon_(Pok%C3%A9mon)" title="411"><img alt="411" src="http://cdn.bulbagarden.net/upload/e/ef/411MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bastiodon_(Pok%C3%A9mon)" title="Bastiodon (Pokémon)">Bastiodon</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>412</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Burmy_(Pok%C3%A9mon)" title="412"><img alt="412" src="http://cdn.bulbagarden.net/upload/8/87/412MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Burmy_(Pok%C3%A9mon)" title="Burmy (Pokémon)">Burmy</a>
                    </td>
                    <td style="background:#FFFFFF"> 45
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>413</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wormadam_(Pok%C3%A9mon)" title="413"><img alt="413" src="http://cdn.bulbagarden.net/upload/f/fa/413MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wormadam_(Pok%C3%A9mon)" title="Wormadam (Pokémon)">Wormadam</a> <small>(Plant Cloak)</small>
                    </td>
                    <td style="background:#FFFFFF"> 148
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>413</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wormadam_(Pok%C3%A9mon)" title="413G"><img alt="413G" src="http://cdn.bulbagarden.net/upload/8/86/413GMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wormadam_(Pok%C3%A9mon)" title="Wormadam (Pokémon)">Wormadam</a> <small>(Sandy Cloak)</small>
                    </td>
                    <td style="background:#FFFFFF"> 148
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>413</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Wormadam_(Pok%C3%A9mon)" title="413S"><img alt="413S" src="http://cdn.bulbagarden.net/upload/8/8e/413SMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Wormadam_(Pok%C3%A9mon)" title="Wormadam (Pokémon)">Wormadam</a> <small>(Trash Cloak)</small>
                    </td>
                    <td style="background:#FFFFFF"> 148
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>414</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mothim_(Pok%C3%A9mon)" title="414"><img alt="414" src="http://cdn.bulbagarden.net/upload/8/8e/414MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mothim_(Pok%C3%A9mon)" title="Mothim (Pokémon)">Mothim</a>
                    </td>
                    <td style="background:#FFFFFF"> 148
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>415</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Combee_(Pok%C3%A9mon)" title="415"><img alt="415" src="http://cdn.bulbagarden.net/upload/e/ee/415MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Combee_(Pok%C3%A9mon)" title="Combee (Pokémon)">Combee</a>
                    </td>
                    <td style="background:#FFFFFF"> 49
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>416</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vespiquen_(Pok%C3%A9mon)" title="416"><img alt="416" src="http://cdn.bulbagarden.net/upload/d/dd/416MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vespiquen_(Pok%C3%A9mon)" title="Vespiquen (Pokémon)">Vespiquen</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>417</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pachirisu_(Pok%C3%A9mon)" title="417"><img alt="417" src="http://cdn.bulbagarden.net/upload/1/14/417MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pachirisu_(Pok%C3%A9mon)" title="Pachirisu (Pokémon)">Pachirisu</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>418</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Buizel_(Pok%C3%A9mon)" title="418"><img alt="418" src="http://cdn.bulbagarden.net/upload/7/7c/418MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Buizel_(Pok%C3%A9mon)" title="Buizel (Pokémon)">Buizel</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>419</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Floatzel_(Pok%C3%A9mon)" title="419"><img alt="419" src="http://cdn.bulbagarden.net/upload/6/6c/419MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Floatzel_(Pok%C3%A9mon)" title="Floatzel (Pokémon)">Floatzel</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>420</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cherubi_(Pok%C3%A9mon)" title="420"><img alt="420" src="http://cdn.bulbagarden.net/upload/5/5d/420MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cherubi_(Pok%C3%A9mon)" title="Cherubi (Pokémon)">Cherubi</a>
                    </td>
                    <td style="background:#FFFFFF"> 55
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>421</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cherrim_(Pok%C3%A9mon)" title="421"><img alt="421" src="http://cdn.bulbagarden.net/upload/6/65/421MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cherrim_(Pok%C3%A9mon)" title="Cherrim (Pokémon)">Cherrim</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>422</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shellos_(Pok%C3%A9mon)" title="422"><img alt="422" src="http://cdn.bulbagarden.net/upload/f/f1/422MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shellos_(Pok%C3%A9mon)" title="Shellos (Pokémon)">Shellos</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>423</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gastrodon_(Pok%C3%A9mon)" title="423"><img alt="423" src="http://cdn.bulbagarden.net/upload/4/44/423MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gastrodon_(Pok%C3%A9mon)" title="Gastrodon (Pokémon)">Gastrodon</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>424</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ambipom_(Pok%C3%A9mon)" title="424"><img alt="424" src="http://cdn.bulbagarden.net/upload/5/5b/424MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ambipom_(Pok%C3%A9mon)" title="Ambipom (Pokémon)">Ambipom</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>425</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Drifloon_(Pok%C3%A9mon)" title="425"><img alt="425" src="http://cdn.bulbagarden.net/upload/0/03/425MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Drifloon_(Pok%C3%A9mon)" title="Drifloon (Pokémon)">Drifloon</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>426</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Drifblim_(Pok%C3%A9mon)" title="426"><img alt="426" src="http://cdn.bulbagarden.net/upload/4/45/426MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Drifblim_(Pok%C3%A9mon)" title="Drifblim (Pokémon)">Drifblim</a>
                    </td>
                    <td style="background:#FFFFFF"> 174
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>427</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Buneary_(Pok%C3%A9mon)" title="427"><img alt="427" src="http://cdn.bulbagarden.net/upload/4/42/427MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Buneary_(Pok%C3%A9mon)" title="Buneary (Pokémon)">Buneary</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>428</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lopunny_(Pok%C3%A9mon)" title="428"><img alt="428" src="http://cdn.bulbagarden.net/upload/3/33/428MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lopunny_(Pok%C3%A9mon)" title="Lopunny (Pokémon)">Lopunny</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>429</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mismagius_(Pok%C3%A9mon)" title="429"><img alt="429" src="http://cdn.bulbagarden.net/upload/4/47/429MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mismagius_(Pok%C3%A9mon)" title="Mismagius (Pokémon)">Mismagius</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>430</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Honchkrow_(Pok%C3%A9mon)" title="430"><img alt="430" src="http://cdn.bulbagarden.net/upload/c/c0/430MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Honchkrow_(Pok%C3%A9mon)" title="Honchkrow (Pokémon)">Honchkrow</a>
                    </td>
                    <td style="background:#FFFFFF"> 177
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>431</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Glameow_(Pok%C3%A9mon)" title="431"><img alt="431" src="http://cdn.bulbagarden.net/upload/f/f1/431MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Glameow_(Pok%C3%A9mon)" title="Glameow (Pokémon)">Glameow</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>432</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Purugly_(Pok%C3%A9mon)" title="432"><img alt="432" src="http://cdn.bulbagarden.net/upload/3/3f/432MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Purugly_(Pok%C3%A9mon)" title="Purugly (Pokémon)">Purugly</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>433</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chingling_(Pok%C3%A9mon)" title="433"><img alt="433" src="http://cdn.bulbagarden.net/upload/7/72/433MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chingling_(Pok%C3%A9mon)" title="Chingling (Pokémon)">Chingling</a>
                    </td>
                    <td style="background:#FFFFFF"> 57
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>434</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Stunky_(Pok%C3%A9mon)" title="434"><img alt="434" src="http://cdn.bulbagarden.net/upload/f/f9/434MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Stunky_(Pok%C3%A9mon)" title="Stunky (Pokémon)">Stunky</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>435</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skuntank_(Pok%C3%A9mon)" title="435"><img alt="435" src="http://cdn.bulbagarden.net/upload/8/8a/435MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skuntank_(Pok%C3%A9mon)" title="Skuntank (Pokémon)">Skuntank</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>436</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bronzor_(Pok%C3%A9mon)" title="436"><img alt="436" src="http://cdn.bulbagarden.net/upload/6/63/436MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bronzor_(Pok%C3%A9mon)" title="Bronzor (Pokémon)">Bronzor</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>437</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bronzong_(Pok%C3%A9mon)" title="437"><img alt="437" src="http://cdn.bulbagarden.net/upload/0/0c/437MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bronzong_(Pok%C3%A9mon)" title="Bronzong (Pokémon)">Bronzong</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>438</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bonsly_(Pok%C3%A9mon)" title="438"><img alt="438" src="http://cdn.bulbagarden.net/upload/7/7a/438MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bonsly_(Pok%C3%A9mon)" title="Bonsly (Pokémon)">Bonsly</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>439</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mime_Jr._(Pok%C3%A9mon)" title="439"><img alt="439" src="http://cdn.bulbagarden.net/upload/4/4d/439MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mime_Jr._(Pok%C3%A9mon)" title="Mime Jr. (Pokémon)">Mime Jr.</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>440</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Happiny_(Pok%C3%A9mon)" title="440"><img alt="440" src="http://cdn.bulbagarden.net/upload/8/8e/440MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Happiny_(Pok%C3%A9mon)" title="Happiny (Pokémon)">Happiny</a>
                    </td>
                    <td style="background:#FFFFFF"> 110
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>441</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chatot_(Pok%C3%A9mon)" title="441"><img alt="441" src="http://cdn.bulbagarden.net/upload/d/db/441MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chatot_(Pok%C3%A9mon)" title="Chatot (Pokémon)">Chatot</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>442</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spiritomb_(Pok%C3%A9mon)" title="442"><img alt="442" src="http://cdn.bulbagarden.net/upload/e/e0/442MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spiritomb_(Pok%C3%A9mon)" title="Spiritomb (Pokémon)">Spiritomb</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>443</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gible_(Pok%C3%A9mon)" title="443"><img alt="443" src="http://cdn.bulbagarden.net/upload/7/7c/443MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gible_(Pok%C3%A9mon)" title="Gible (Pokémon)">Gible</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>444</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gabite_(Pok%C3%A9mon)" title="444"><img alt="444" src="http://cdn.bulbagarden.net/upload/6/69/444MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gabite_(Pok%C3%A9mon)" title="Gabite (Pokémon)">Gabite</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>445</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Garchomp_(Pok%C3%A9mon)" title="445"><img alt="445" src="http://cdn.bulbagarden.net/upload/6/63/445MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Garchomp_(Pok%C3%A9mon)" title="Garchomp (Pokémon)">Garchomp</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>446</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Munchlax_(Pok%C3%A9mon)" title="446"><img alt="446" src="http://cdn.bulbagarden.net/upload/0/06/446MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Munchlax_(Pok%C3%A9mon)" title="Munchlax (Pokémon)">Munchlax</a>
                    </td>
                    <td style="background:#FFFFFF"> 78
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>447</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Riolu_(Pok%C3%A9mon)" title="447"><img alt="447" src="http://cdn.bulbagarden.net/upload/0/0a/447MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Riolu_(Pok%C3%A9mon)" title="Riolu (Pokémon)">Riolu</a>
                    </td>
                    <td style="background:#FFFFFF"> 57
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>448</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lucario_(Pok%C3%A9mon)" title="448"><img alt="448" src="http://cdn.bulbagarden.net/upload/b/be/448MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lucario_(Pok%C3%A9mon)" title="Lucario (Pokémon)">Lucario</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>449</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hippopotas_(Pok%C3%A9mon)" title="449"><img alt="449" src="http://cdn.bulbagarden.net/upload/5/58/449MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hippopotas_(Pok%C3%A9mon)" title="Hippopotas (Pokémon)">Hippopotas</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>450</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hippowdon_(Pok%C3%A9mon)" title="450"><img alt="450" src="http://cdn.bulbagarden.net/upload/5/57/450MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hippowdon_(Pok%C3%A9mon)" title="Hippowdon (Pokémon)">Hippowdon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>451</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skorupi_(Pok%C3%A9mon)" title="451"><img alt="451" src="http://cdn.bulbagarden.net/upload/0/02/451MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skorupi_(Pok%C3%A9mon)" title="Skorupi (Pokémon)">Skorupi</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>452</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Drapion_(Pok%C3%A9mon)" title="452"><img alt="452" src="http://cdn.bulbagarden.net/upload/9/96/452MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Drapion_(Pok%C3%A9mon)" title="Drapion (Pokémon)">Drapion</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>453</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Croagunk_(Pok%C3%A9mon)" title="453"><img alt="453" src="http://cdn.bulbagarden.net/upload/2/2c/453MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Croagunk_(Pok%C3%A9mon)" title="Croagunk (Pokémon)">Croagunk</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>454</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Toxicroak_(Pok%C3%A9mon)" title="454"><img alt="454" src="http://cdn.bulbagarden.net/upload/f/f9/454MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Toxicroak_(Pok%C3%A9mon)" title="Toxicroak (Pokémon)">Toxicroak</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>455</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Carnivine_(Pok%C3%A9mon)" title="455"><img alt="455" src="http://cdn.bulbagarden.net/upload/d/d1/455MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Carnivine_(Pok%C3%A9mon)" title="Carnivine (Pokémon)">Carnivine</a>
                    </td>
                    <td style="background:#FFFFFF"> 159
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>456</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Finneon_(Pok%C3%A9mon)" title="456"><img alt="456" src="http://cdn.bulbagarden.net/upload/7/73/456MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Finneon_(Pok%C3%A9mon)" title="Finneon (Pokémon)">Finneon</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>457</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lumineon_(Pok%C3%A9mon)" title="457"><img alt="457" src="http://cdn.bulbagarden.net/upload/2/2b/457MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lumineon_(Pok%C3%A9mon)" title="Lumineon (Pokémon)">Lumineon</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>458</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mantyke_(Pok%C3%A9mon)" title="458"><img alt="458" src="http://cdn.bulbagarden.net/upload/8/80/458MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mantyke_(Pok%C3%A9mon)" title="Mantyke (Pokémon)">Mantyke</a>
                    </td>
                    <td style="background:#FFFFFF"> 69
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>459</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Snover_(Pok%C3%A9mon)" title="459"><img alt="459" src="http://cdn.bulbagarden.net/upload/0/06/459MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Snover_(Pok%C3%A9mon)" title="Snover (Pokémon)">Snover</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>460</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Abomasnow_(Pok%C3%A9mon)" title="460"><img alt="460" src="http://cdn.bulbagarden.net/upload/f/fc/460MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Abomasnow_(Pok%C3%A9mon)" title="Abomasnow (Pokémon)">Abomasnow</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>461</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Weavile_(Pok%C3%A9mon)" title="461"><img alt="461" src="http://cdn.bulbagarden.net/upload/9/96/461MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Weavile_(Pok%C3%A9mon)" title="Weavile (Pokémon)">Weavile</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>462</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magnezone_(Pok%C3%A9mon)" title="462"><img alt="462" src="http://cdn.bulbagarden.net/upload/2/26/462MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magnezone_(Pok%C3%A9mon)" title="Magnezone (Pokémon)">Magnezone</a>
                    </td>
                    <td style="background:#FFFFFF"> 241
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>463</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lickilicky_(Pok%C3%A9mon)" title="463"><img alt="463" src="http://cdn.bulbagarden.net/upload/9/9b/463MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lickilicky_(Pok%C3%A9mon)" title="Lickilicky (Pokémon)">Lickilicky</a>
                    </td>
                    <td style="background:#FFFFFF"> 180
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>464</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rhyperior_(Pok%C3%A9mon)" title="464"><img alt="464" src="http://cdn.bulbagarden.net/upload/e/e9/464MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rhyperior_(Pok%C3%A9mon)" title="Rhyperior (Pokémon)">Rhyperior</a>
                    </td>
                    <td style="background:#FFFFFF"> 241
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>465</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tangrowth_(Pok%C3%A9mon)" title="465"><img alt="465" src="http://cdn.bulbagarden.net/upload/a/aa/465MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tangrowth_(Pok%C3%A9mon)" title="Tangrowth (Pokémon)">Tangrowth</a>
                    </td>
                    <td style="background:#FFFFFF"> 187
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>466</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Electivire_(Pok%C3%A9mon)" title="466"><img alt="466" src="http://cdn.bulbagarden.net/upload/5/53/466MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Electivire_(Pok%C3%A9mon)" title="Electivire (Pokémon)">Electivire</a>
                    </td>
                    <td style="background:#FFFFFF"> 243
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>467</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Magmortar_(Pok%C3%A9mon)" title="467"><img alt="467" src="http://cdn.bulbagarden.net/upload/4/4e/467MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Magmortar_(Pok%C3%A9mon)" title="Magmortar (Pokémon)">Magmortar</a>
                    </td>
                    <td style="background:#FFFFFF"> 243
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>468</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Togekiss_(Pok%C3%A9mon)" title="468"><img alt="468" src="http://cdn.bulbagarden.net/upload/6/63/468MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Togekiss_(Pok%C3%A9mon)" title="Togekiss (Pokémon)">Togekiss</a>
                    </td>
                    <td style="background:#FFFFFF"> 245
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>469</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Yanmega_(Pok%C3%A9mon)" title="469"><img alt="469" src="http://cdn.bulbagarden.net/upload/a/aa/469MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Yanmega_(Pok%C3%A9mon)" title="Yanmega (Pokémon)">Yanmega</a>
                    </td>
                    <td style="background:#FFFFFF"> 180
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>470</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Leafeon_(Pok%C3%A9mon)" title="470"><img alt="470" src="http://cdn.bulbagarden.net/upload/1/12/470MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Leafeon_(Pok%C3%A9mon)" title="Leafeon (Pokémon)">Leafeon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>471</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Glaceon_(Pok%C3%A9mon)" title="471"><img alt="471" src="http://cdn.bulbagarden.net/upload/b/bb/471MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Glaceon_(Pok%C3%A9mon)" title="Glaceon (Pokémon)">Glaceon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>472</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gliscor_(Pok%C3%A9mon)" title="472"><img alt="472" src="http://cdn.bulbagarden.net/upload/a/ad/472MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gliscor_(Pok%C3%A9mon)" title="Gliscor (Pokémon)">Gliscor</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>473</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mamoswine_(Pok%C3%A9mon)" title="473"><img alt="473" src="http://cdn.bulbagarden.net/upload/1/12/473MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mamoswine_(Pok%C3%A9mon)" title="Mamoswine (Pokémon)">Mamoswine</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>474</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Porygon-Z_(Pok%C3%A9mon)" title="474"><img alt="474" src="http://cdn.bulbagarden.net/upload/6/65/474MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Porygon-Z_(Pok%C3%A9mon)" title="Porygon-Z (Pokémon)">Porygon-Z</a>
                    </td>
                    <td style="background:#FFFFFF"> 241
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>475</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gallade_(Pok%C3%A9mon)" title="475"><img alt="475" src="http://cdn.bulbagarden.net/upload/8/85/475MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gallade_(Pok%C3%A9mon)" title="Gallade (Pokémon)">Gallade</a>
                    </td>
                    <td style="background:#FFFFFF"> 233
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>476</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Probopass_(Pok%C3%A9mon)" title="476"><img alt="476" src="http://cdn.bulbagarden.net/upload/a/aa/476MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Probopass_(Pok%C3%A9mon)" title="Probopass (Pokémon)">Probopass</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>477</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dusknoir_(Pok%C3%A9mon)" title="477"><img alt="477" src="http://cdn.bulbagarden.net/upload/7/71/477MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dusknoir_(Pok%C3%A9mon)" title="Dusknoir (Pokémon)">Dusknoir</a>
                    </td>
                    <td style="background:#FFFFFF"> 236
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>478</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Froslass_(Pok%C3%A9mon)" title="478"><img alt="478" src="http://cdn.bulbagarden.net/upload/8/8f/478MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Froslass_(Pok%C3%A9mon)" title="Froslass (Pokémon)">Froslass</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>479</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rotom_(Pok%C3%A9mon)" title="479"><img alt="479" src="http://cdn.bulbagarden.net/upload/1/14/479MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rotom_(Pok%C3%A9mon)" title="Rotom (Pokémon)">Rotom</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>480</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Uxie_(Pok%C3%A9mon)" title="480"><img alt="480" src="http://cdn.bulbagarden.net/upload/0/0e/480MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Uxie_(Pok%C3%A9mon)" title="Uxie (Pokémon)">Uxie</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>481</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mesprit_(Pok%C3%A9mon)" title="481"><img alt="481" src="http://cdn.bulbagarden.net/upload/c/c7/481MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mesprit_(Pok%C3%A9mon)" title="Mesprit (Pokémon)">Mesprit</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>482</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Azelf_(Pok%C3%A9mon)" title="482"><img alt="482" src="http://cdn.bulbagarden.net/upload/0/01/482MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Azelf_(Pok%C3%A9mon)" title="Azelf (Pokémon)">Azelf</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>483</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dialga_(Pok%C3%A9mon)" title="483"><img alt="483" src="http://cdn.bulbagarden.net/upload/c/ca/483MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dialga_(Pok%C3%A9mon)" title="Dialga (Pokémon)">Dialga</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>484</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Palkia_(Pok%C3%A9mon)" title="484"><img alt="484" src="http://cdn.bulbagarden.net/upload/2/24/484MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Palkia_(Pok%C3%A9mon)" title="Palkia (Pokémon)">Palkia</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>485</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Heatran_(Pok%C3%A9mon)" title="485"><img alt="485" src="http://cdn.bulbagarden.net/upload/c/cf/485MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Heatran_(Pok%C3%A9mon)" title="Heatran (Pokémon)">Heatran</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>486</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Regigigas_(Pok%C3%A9mon)" title="486"><img alt="486" src="http://cdn.bulbagarden.net/upload/8/8e/486MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Regigigas_(Pok%C3%A9mon)" title="Regigigas (Pokémon)">Regigigas</a>
                    </td>
                    <td style="background:#FFFFFF"> 302
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>487</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Giratina_(Pok%C3%A9mon)" title="487"><img alt="487" src="http://cdn.bulbagarden.net/upload/e/e8/487MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Giratina_(Pok%C3%A9mon)" title="Giratina (Pokémon)">Giratina</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>488</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cresselia_(Pok%C3%A9mon)" title="488"><img alt="488" src="http://cdn.bulbagarden.net/upload/5/51/488MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cresselia_(Pok%C3%A9mon)" title="Cresselia (Pokémon)">Cresselia</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>489</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Phione_(Pok%C3%A9mon)" title="489"><img alt="489" src="http://cdn.bulbagarden.net/upload/c/ce/489MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Phione_(Pok%C3%A9mon)" title="Phione (Pokémon)">Phione</a>
                    </td>
                    <td style="background:#FFFFFF"> 216
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>490</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Manaphy_(Pok%C3%A9mon)" title="490"><img alt="490" src="http://cdn.bulbagarden.net/upload/0/01/490MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Manaphy_(Pok%C3%A9mon)" title="Manaphy (Pokémon)">Manaphy</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>491</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Darkrai_(Pok%C3%A9mon)" title="491"><img alt="491" src="http://cdn.bulbagarden.net/upload/a/a7/491MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Darkrai_(Pok%C3%A9mon)" title="Darkrai (Pokémon)">Darkrai</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>492</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shaymin_(Pok%C3%A9mon)" title="492"><img alt="492" src="http://cdn.bulbagarden.net/upload/a/a6/492MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shaymin_(Pok%C3%A9mon)" title="Shaymin (Pokémon)">Shaymin</a> <small>(Land Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>492</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shaymin_(Pok%C3%A9mon)" title="492S"><img alt="492S" src="http://cdn.bulbagarden.net/upload/6/68/492SMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shaymin_(Pok%C3%A9mon)" title="Shaymin (Pokémon)">Shaymin</a> <small>(Sky Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>493</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Arceus_(Pok%C3%A9mon)" title="493"><img alt="493" src="http://cdn.bulbagarden.net/upload/9/94/493MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Arceus_(Pok%C3%A9mon)" title="Arceus (Pokémon)">Arceus</a>
                    </td>
                    <td style="background:#FFFFFF"> 324
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>494</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Victini_(Pok%C3%A9mon)" title="494"><img alt="494" src="http://cdn.bulbagarden.net/upload/0/0c/494MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Victini_(Pok%C3%A9mon)" title="Victini (Pokémon)">Victini</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>495</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Snivy_(Pok%C3%A9mon)" title="495"><img alt="495" src="http://cdn.bulbagarden.net/upload/2/23/495MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Snivy_(Pok%C3%A9mon)" title="Snivy (Pokémon)">Snivy</a>
                    </td>
                    <td style="background:#FFFFFF"> 28
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>496</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Servine_(Pok%C3%A9mon)" title="496"><img alt="496" src="http://cdn.bulbagarden.net/upload/8/8f/496MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Servine_(Pok%C3%A9mon)" title="Servine (Pokémon)">Servine</a>
                    </td>
                    <td style="background:#FFFFFF"> 145
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>497</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Serperior_(Pok%C3%A9mon)" title="497"><img alt="497" src="http://cdn.bulbagarden.net/upload/2/2e/497MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Serperior_(Pok%C3%A9mon)" title="Serperior (Pokémon)">Serperior</a>
                    </td>
                    <td style="background:#FFFFFF"> 238
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>498</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tepig_(Pok%C3%A9mon)" title="498"><img alt="498" src="http://cdn.bulbagarden.net/upload/6/6f/498MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tepig_(Pok%C3%A9mon)" title="Tepig (Pokémon)">Tepig</a>
                    </td>
                    <td style="background:#FFFFFF"> 28
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>499</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pignite_(Pok%C3%A9mon)" title="499"><img alt="499" src="http://cdn.bulbagarden.net/upload/2/29/499MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pignite_(Pok%C3%A9mon)" title="Pignite (Pokémon)">Pignite</a>
                    </td>
                    <td style="background:#FFFFFF"> 146
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>500</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Emboar_(Pok%C3%A9mon)" title="500"><img alt="500" src="http://cdn.bulbagarden.net/upload/b/be/500MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Emboar_(Pok%C3%A9mon)" title="Emboar (Pokémon)">Emboar</a>
                    </td>
                    <td style="background:#FFFFFF"> 238
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>501</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Oshawott_(Pok%C3%A9mon)" title="501"><img alt="501" src="http://cdn.bulbagarden.net/upload/c/cb/501MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Oshawott_(Pok%C3%A9mon)" title="Oshawott (Pokémon)">Oshawott</a>
                    </td>
                    <td style="background:#FFFFFF"> 28
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>502</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dewott_(Pok%C3%A9mon)" title="502"><img alt="502" src="http://cdn.bulbagarden.net/upload/e/ed/502MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dewott_(Pok%C3%A9mon)" title="Dewott (Pokémon)">Dewott</a>
                    </td>
                    <td style="background:#FFFFFF"> 145
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>503</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Samurott_(Pok%C3%A9mon)" title="503"><img alt="503" src="http://cdn.bulbagarden.net/upload/9/99/503MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Samurott_(Pok%C3%A9mon)" title="Samurott (Pokémon)">Samurott</a>
                    </td>
                    <td style="background:#FFFFFF"> 238
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>504</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Patrat_(Pok%C3%A9mon)" title="504"><img alt="504" src="http://cdn.bulbagarden.net/upload/7/73/504MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Patrat_(Pok%C3%A9mon)" title="Patrat (Pokémon)">Patrat</a>
                    </td>
                    <td style="background:#FFFFFF"> 51
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>505</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Watchog_(Pok%C3%A9mon)" title="505"><img alt="505" src="http://cdn.bulbagarden.net/upload/9/9b/505MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Watchog_(Pok%C3%A9mon)" title="Watchog (Pokémon)">Watchog</a>
                    </td>
                    <td style="background:#FFFFFF"> 147<span class="explain" title="1 Attack EV in Black and White">*</span>
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>506</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lillipup_(Pok%C3%A9mon)" title="506"><img alt="506" src="http://cdn.bulbagarden.net/upload/c/cc/506MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lillipup_(Pok%C3%A9mon)" title="Lillipup (Pokémon)">Lillipup</a>
                    </td>
                    <td style="background:#FFFFFF"> 55
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>507</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Herdier_(Pok%C3%A9mon)" title="507"><img alt="507" src="http://cdn.bulbagarden.net/upload/f/f2/507MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Herdier_(Pok%C3%A9mon)" title="Herdier (Pokémon)">Herdier</a>
                    </td>
                    <td style="background:#FFFFFF"> 130
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>508</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Stoutland_(Pok%C3%A9mon)" title="508"><img alt="508" src="http://cdn.bulbagarden.net/upload/0/0f/508MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Stoutland_(Pok%C3%A9mon)" title="Stoutland (Pokémon)">Stoutland</a>
                    </td>
                    <td style="background:#FFFFFF"> 221
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>509</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Purrloin_(Pok%C3%A9mon)" title="509"><img alt="509" src="http://cdn.bulbagarden.net/upload/b/b5/509MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Purrloin_(Pok%C3%A9mon)" title="Purrloin (Pokémon)">Purrloin</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>510</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Liepard_(Pok%C3%A9mon)" title="510"><img alt="510" src="http://cdn.bulbagarden.net/upload/4/4e/510MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Liepard_(Pok%C3%A9mon)" title="Liepard (Pokémon)">Liepard</a>
                    </td>
                    <td style="background:#FFFFFF"> 156
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>511</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pansage_(Pok%C3%A9mon)" title="511"><img alt="511" src="http://cdn.bulbagarden.net/upload/9/99/511MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pansage_(Pok%C3%A9mon)" title="Pansage (Pokémon)">Pansage</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>512</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Simisage_(Pok%C3%A9mon)" title="512"><img alt="512" src="http://cdn.bulbagarden.net/upload/6/6a/512MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Simisage_(Pok%C3%A9mon)" title="Simisage (Pokémon)">Simisage</a>
                    </td>
                    <td style="background:#FFFFFF"> 174
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>513</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pansear_(Pok%C3%A9mon)" title="513"><img alt="513" src="http://cdn.bulbagarden.net/upload/c/cb/513MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pansear_(Pok%C3%A9mon)" title="Pansear (Pokémon)">Pansear</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>514</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Simisear_(Pok%C3%A9mon)" title="514"><img alt="514" src="http://cdn.bulbagarden.net/upload/0/00/514MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Simisear_(Pok%C3%A9mon)" title="Simisear (Pokémon)">Simisear</a>
                    </td>
                    <td style="background:#FFFFFF"> 174
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>515</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Panpour_(Pok%C3%A9mon)" title="515"><img alt="515" src="http://cdn.bulbagarden.net/upload/9/91/515MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Panpour_(Pok%C3%A9mon)" title="Panpour (Pokémon)">Panpour</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>516</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Simipour_(Pok%C3%A9mon)" title="516"><img alt="516" src="http://cdn.bulbagarden.net/upload/1/19/516MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Simipour_(Pok%C3%A9mon)" title="Simipour (Pokémon)">Simipour</a>
                    </td>
                    <td style="background:#FFFFFF"> 174
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>517</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Munna_(Pok%C3%A9mon)" title="517"><img alt="517" src="http://cdn.bulbagarden.net/upload/f/f2/517MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Munna_(Pok%C3%A9mon)" title="Munna (Pokémon)">Munna</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>518</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Musharna_(Pok%C3%A9mon)" title="518"><img alt="518" src="http://cdn.bulbagarden.net/upload/3/3e/518MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Musharna_(Pok%C3%A9mon)" title="Musharna (Pokémon)">Musharna</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>519</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pidove_(Pok%C3%A9mon)" title="519"><img alt="519" src="http://cdn.bulbagarden.net/upload/a/a9/519MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pidove_(Pok%C3%A9mon)" title="Pidove (Pokémon)">Pidove</a>
                    </td>
                    <td style="background:#FFFFFF"> 53
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>520</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tranquill_(Pok%C3%A9mon)" title="520"><img alt="520" src="http://cdn.bulbagarden.net/upload/9/90/520MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tranquill_(Pok%C3%A9mon)" title="Tranquill (Pokémon)">Tranquill</a>
                    </td>
                    <td style="background:#FFFFFF"> 125
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>521</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Unfezant_(Pok%C3%A9mon)" title="521"><img alt="521" src="http://cdn.bulbagarden.net/upload/a/a9/521MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Unfezant_(Pok%C3%A9mon)" title="Unfezant (Pokémon)">Unfezant</a>
                    </td>
                    <td style="background:#FFFFFF"> 215
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>522</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Blitzle_(Pok%C3%A9mon)" title="522"><img alt="522" src="http://cdn.bulbagarden.net/upload/5/58/522MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Blitzle_(Pok%C3%A9mon)" title="Blitzle (Pokémon)">Blitzle</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>523</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zebstrika_(Pok%C3%A9mon)" title="523"><img alt="523" src="http://cdn.bulbagarden.net/upload/d/d7/523MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zebstrika_(Pok%C3%A9mon)" title="Zebstrika (Pokémon)">Zebstrika</a>
                    </td>
                    <td style="background:#FFFFFF"> 174
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>524</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Roggenrola_(Pok%C3%A9mon)" title="524"><img alt="524" src="http://cdn.bulbagarden.net/upload/6/62/524MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Roggenrola_(Pok%C3%A9mon)" title="Roggenrola (Pokémon)">Roggenrola</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>525</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Boldore_(Pok%C3%A9mon)" title="525"><img alt="525" src="http://cdn.bulbagarden.net/upload/2/25/525MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Boldore_(Pok%C3%A9mon)" title="Boldore (Pokémon)">Boldore</a>
                    </td>
                    <td style="background:#FFFFFF"> 137
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>526</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gigalith_(Pok%C3%A9mon)" title="526"><img alt="526" src="http://cdn.bulbagarden.net/upload/5/53/526MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gigalith_(Pok%C3%A9mon)" title="Gigalith (Pokémon)">Gigalith</a>
                    </td>
                    <td style="background:#FFFFFF"> 227
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>527</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Woobat_(Pok%C3%A9mon)" title="527"><img alt="527" src="http://cdn.bulbagarden.net/upload/8/8d/527MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Woobat_(Pok%C3%A9mon)" title="Woobat (Pokémon)">Woobat</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>528</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swoobat_(Pok%C3%A9mon)" title="528"><img alt="528" src="http://cdn.bulbagarden.net/upload/d/de/528MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swoobat_(Pok%C3%A9mon)" title="Swoobat (Pokémon)">Swoobat</a>
                    </td>
                    <td style="background:#FFFFFF"> 149
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>529</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Drilbur_(Pok%C3%A9mon)" title="529"><img alt="529" src="http://cdn.bulbagarden.net/upload/0/0a/529MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Drilbur_(Pok%C3%A9mon)" title="Drilbur (Pokémon)">Drilbur</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>530</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Excadrill_(Pok%C3%A9mon)" title="530"><img alt="530" src="http://cdn.bulbagarden.net/upload/7/71/530MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Excadrill_(Pok%C3%A9mon)" title="Excadrill (Pokémon)">Excadrill</a>
                    </td>
                    <td style="background:#FFFFFF"> 178
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>531</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Audino_(Pok%C3%A9mon)" title="531"><img alt="531" src="http://cdn.bulbagarden.net/upload/a/a5/531MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Audino_(Pok%C3%A9mon)" title="Audino (Pokémon)">Audino</a>
                    </td>
                    <td style="background:#FFFFFF"> 390
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>532</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Timburr_(Pok%C3%A9mon)" title="532"><img alt="532" src="http://cdn.bulbagarden.net/upload/8/80/532MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Timburr_(Pok%C3%A9mon)" title="Timburr (Pokémon)">Timburr</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>533</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gurdurr_(Pok%C3%A9mon)" title="533"><img alt="533" src="http://cdn.bulbagarden.net/upload/2/2d/533MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gurdurr_(Pok%C3%A9mon)" title="Gurdurr (Pokémon)">Gurdurr</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>534</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Conkeldurr_(Pok%C3%A9mon)" title="534"><img alt="534" src="http://cdn.bulbagarden.net/upload/8/8b/534MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Conkeldurr_(Pok%C3%A9mon)" title="Conkeldurr (Pokémon)">Conkeldurr</a>
                    </td>
                    <td style="background:#FFFFFF"> 227
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>535</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tympole_(Pok%C3%A9mon)" title="535"><img alt="535" src="http://cdn.bulbagarden.net/upload/0/0e/535MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tympole_(Pok%C3%A9mon)" title="Tympole (Pokémon)">Tympole</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>536</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Palpitoad_(Pok%C3%A9mon)" title="536"><img alt="536" src="http://cdn.bulbagarden.net/upload/2/2a/536MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Palpitoad_(Pok%C3%A9mon)" title="Palpitoad (Pokémon)">Palpitoad</a>
                    </td>
                    <td style="background:#FFFFFF"> 134
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>537</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Seismitoad_(Pok%C3%A9mon)" title="537"><img alt="537" src="http://cdn.bulbagarden.net/upload/9/95/537MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Seismitoad_(Pok%C3%A9mon)" title="Seismitoad (Pokémon)">Seismitoad</a>
                    </td>
                    <td style="background:#FFFFFF"> 225
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>538</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Throh_(Pok%C3%A9mon)" title="538"><img alt="538" src="http://cdn.bulbagarden.net/upload/7/73/538MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Throh_(Pok%C3%A9mon)" title="Throh (Pokémon)">Throh</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>539</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sawk_(Pok%C3%A9mon)" title="539"><img alt="539" src="http://cdn.bulbagarden.net/upload/8/82/539MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sawk_(Pok%C3%A9mon)" title="Sawk (Pokémon)">Sawk</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>540</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sewaddle_(Pok%C3%A9mon)" title="540"><img alt="540" src="http://cdn.bulbagarden.net/upload/9/97/540MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sewaddle_(Pok%C3%A9mon)" title="Sewaddle (Pokémon)">Sewaddle</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>541</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swadloon_(Pok%C3%A9mon)" title="541"><img alt="541" src="http://cdn.bulbagarden.net/upload/a/ab/541MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swadloon_(Pok%C3%A9mon)" title="Swadloon (Pokémon)">Swadloon</a>
                    </td>
                    <td style="background:#FFFFFF"> 133
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>542</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Leavanny_(Pok%C3%A9mon)" title="542"><img alt="542" src="http://cdn.bulbagarden.net/upload/2/2d/542MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Leavanny_(Pok%C3%A9mon)" title="Leavanny (Pokémon)">Leavanny</a>
                    </td>
                    <td style="background:#FFFFFF"> 221
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>543</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Venipede_(Pok%C3%A9mon)" title="543"><img alt="543" src="http://cdn.bulbagarden.net/upload/2/2c/543MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Venipede_(Pok%C3%A9mon)" title="Venipede (Pokémon)">Venipede</a>
                    </td>
                    <td style="background:#FFFFFF"> 52
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>544</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Whirlipede_(Pok%C3%A9mon)" title="544"><img alt="544" src="http://cdn.bulbagarden.net/upload/b/ba/544MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Whirlipede_(Pok%C3%A9mon)" title="Whirlipede (Pokémon)">Whirlipede</a>
                    </td>
                    <td style="background:#FFFFFF"> 126
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>545</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Scolipede_(Pok%C3%A9mon)" title="545"><img alt="545" src="http://cdn.bulbagarden.net/upload/d/d3/545MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Scolipede_(Pok%C3%A9mon)" title="Scolipede (Pokémon)">Scolipede</a>
                    </td>
                    <td style="background:#FFFFFF"> 214
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>546</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cottonee_(Pok%C3%A9mon)" title="546"><img alt="546" src="http://cdn.bulbagarden.net/upload/a/ac/546MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cottonee_(Pok%C3%A9mon)" title="Cottonee (Pokémon)">Cottonee</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>547</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Whimsicott_(Pok%C3%A9mon)" title="547"><img alt="547" src="http://cdn.bulbagarden.net/upload/1/1c/547MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Whimsicott_(Pok%C3%A9mon)" title="Whimsicott (Pokémon)">Whimsicott</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>548</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Petilil_(Pok%C3%A9mon)" title="548"><img alt="548" src="http://cdn.bulbagarden.net/upload/d/d4/548MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Petilil_(Pok%C3%A9mon)" title="Petilil (Pokémon)">Petilil</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>549</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lilligant_(Pok%C3%A9mon)" title="549"><img alt="549" src="http://cdn.bulbagarden.net/upload/d/d1/549MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lilligant_(Pok%C3%A9mon)" title="Lilligant (Pokémon)">Lilligant</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>550</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Basculin_(Pok%C3%A9mon)" title="550"><img alt="550" src="http://cdn.bulbagarden.net/upload/a/a7/550MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Basculin_(Pok%C3%A9mon)" title="Basculin (Pokémon)">Basculin</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>551</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sandile_(Pok%C3%A9mon)" title="551"><img alt="551" src="http://cdn.bulbagarden.net/upload/1/1a/551MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sandile_(Pok%C3%A9mon)" title="Sandile (Pokémon)">Sandile</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>552</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Krokorok_(Pok%C3%A9mon)" title="552"><img alt="552" src="http://cdn.bulbagarden.net/upload/c/cd/552MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Krokorok_(Pok%C3%A9mon)" title="Krokorok (Pokémon)">Krokorok</a>
                    </td>
                    <td style="background:#FFFFFF"> 123
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>553</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Krookodile_(Pok%C3%A9mon)" title="553"><img alt="553" src="http://cdn.bulbagarden.net/upload/f/fe/553MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Krookodile_(Pok%C3%A9mon)" title="Krookodile (Pokémon)">Krookodile</a>
                    </td>
                    <td style="background:#FFFFFF"> 229
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>554</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Darumaka_(Pok%C3%A9mon)" title="554"><img alt="554" src="http://cdn.bulbagarden.net/upload/8/8f/554MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Darumaka_(Pok%C3%A9mon)" title="Darumaka (Pokémon)">Darumaka</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>555</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Darmanitan_(Pok%C3%A9mon)" title="555"><img alt="555" src="http://cdn.bulbagarden.net/upload/5/52/555MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Darmanitan_(Pok%C3%A9mon)" title="Darmanitan (Pokémon)">Darmanitan</a> <small>(Standard Mode)</small>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>555</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Darmanitan_(Pok%C3%A9mon)" title="555Z"><img alt="555Z" src="http://cdn.bulbagarden.net/upload/6/66/555ZMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Darmanitan_(Pok%C3%A9mon)" title="Darmanitan (Pokémon)">Darmanitan</a> <small>(Zen Mode)</small>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>556</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Maractus_(Pok%C3%A9mon)" title="556"><img alt="556" src="http://cdn.bulbagarden.net/upload/f/f2/556MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Maractus_(Pok%C3%A9mon)" title="Maractus (Pokémon)">Maractus</a>
                    </td>
                    <td style="background:#FFFFFF"> 161
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>557</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dwebble_(Pok%C3%A9mon)" title="557"><img alt="557" src="http://cdn.bulbagarden.net/upload/9/9e/557MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dwebble_(Pok%C3%A9mon)" title="Dwebble (Pokémon)">Dwebble</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>558</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Crustle_(Pok%C3%A9mon)" title="558"><img alt="558" src="http://cdn.bulbagarden.net/upload/e/e3/558MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Crustle_(Pok%C3%A9mon)" title="Crustle (Pokémon)">Crustle</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>559</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Scraggy_(Pok%C3%A9mon)" title="559"><img alt="559" src="http://cdn.bulbagarden.net/upload/0/09/559MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Scraggy_(Pok%C3%A9mon)" title="Scraggy (Pokémon)">Scraggy</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>560</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Scrafty_(Pok%C3%A9mon)" title="560"><img alt="560" src="http://cdn.bulbagarden.net/upload/a/a3/560MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Scrafty_(Pok%C3%A9mon)" title="Scrafty (Pokémon)">Scrafty</a>
                    </td>
                    <td style="background:#FFFFFF"> 171
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>561</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sigilyph_(Pok%C3%A9mon)" title="561"><img alt="561" src="http://cdn.bulbagarden.net/upload/7/76/561MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sigilyph_(Pok%C3%A9mon)" title="Sigilyph (Pokémon)">Sigilyph</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>562</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Yamask_(Pok%C3%A9mon)" title="562"><img alt="562" src="http://cdn.bulbagarden.net/upload/a/a9/562MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Yamask_(Pok%C3%A9mon)" title="Yamask (Pokémon)">Yamask</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>563</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cofagrigus_(Pok%C3%A9mon)" title="563"><img alt="563" src="http://cdn.bulbagarden.net/upload/9/9b/563MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cofagrigus_(Pok%C3%A9mon)" title="Cofagrigus (Pokémon)">Cofagrigus</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>564</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tirtouga_(Pok%C3%A9mon)" title="564"><img alt="564" src="http://cdn.bulbagarden.net/upload/f/f7/564MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tirtouga_(Pok%C3%A9mon)" title="Tirtouga (Pokémon)">Tirtouga</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>565</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Carracosta_(Pok%C3%A9mon)" title="565"><img alt="565" src="http://cdn.bulbagarden.net/upload/a/a3/565MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Carracosta_(Pok%C3%A9mon)" title="Carracosta (Pokémon)">Carracosta</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>566</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Archen_(Pok%C3%A9mon)" title="566"><img alt="566" src="http://cdn.bulbagarden.net/upload/8/8a/566MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Archen_(Pok%C3%A9mon)" title="Archen (Pokémon)">Archen</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>567</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Archeops_(Pok%C3%A9mon)" title="567"><img alt="567" src="http://cdn.bulbagarden.net/upload/a/a9/567MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Archeops_(Pok%C3%A9mon)" title="Archeops (Pokémon)">Archeops</a>
                    </td>
                    <td style="background:#FFFFFF"> 177
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>568</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Trubbish_(Pok%C3%A9mon)" title="568"><img alt="568" src="http://cdn.bulbagarden.net/upload/d/d8/568MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Trubbish_(Pok%C3%A9mon)" title="Trubbish (Pokémon)">Trubbish</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>569</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Garbodor_(Pok%C3%A9mon)" title="569"><img alt="569" src="http://cdn.bulbagarden.net/upload/2/2e/569MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Garbodor_(Pok%C3%A9mon)" title="Garbodor (Pokémon)">Garbodor</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>570</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zorua_(Pok%C3%A9mon)" title="570"><img alt="570" src="http://cdn.bulbagarden.net/upload/d/d5/570MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zorua_(Pok%C3%A9mon)" title="Zorua (Pokémon)">Zorua</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>571</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zoroark_(Pok%C3%A9mon)" title="571"><img alt="571" src="http://cdn.bulbagarden.net/upload/b/bd/571MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zoroark_(Pok%C3%A9mon)" title="Zoroark (Pokémon)">Zoroark</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>572</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Minccino_(Pok%C3%A9mon)" title="572"><img alt="572" src="http://cdn.bulbagarden.net/upload/b/b7/572MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Minccino_(Pok%C3%A9mon)" title="Minccino (Pokémon)">Minccino</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>573</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cinccino_(Pok%C3%A9mon)" title="573"><img alt="573" src="http://cdn.bulbagarden.net/upload/8/82/573MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cinccino_(Pok%C3%A9mon)" title="Cinccino (Pokémon)">Cinccino</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>574</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gothita_(Pok%C3%A9mon)" title="574"><img alt="574" src="http://cdn.bulbagarden.net/upload/5/57/574MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gothita_(Pok%C3%A9mon)" title="Gothita (Pokémon)">Gothita</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>575</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gothorita_(Pok%C3%A9mon)" title="575"><img alt="575" src="http://cdn.bulbagarden.net/upload/7/75/575MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gothorita_(Pok%C3%A9mon)" title="Gothorita (Pokémon)">Gothorita</a>
                    </td>
                    <td style="background:#FFFFFF"> 137
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>576</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gothitelle_(Pok%C3%A9mon)" title="576"><img alt="576" src="http://cdn.bulbagarden.net/upload/b/be/576MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gothitelle_(Pok%C3%A9mon)" title="Gothitelle (Pokémon)">Gothitelle</a>
                    </td>
                    <td style="background:#FFFFFF"> 221
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>577</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Solosis_(Pok%C3%A9mon)" title="577"><img alt="577" src="http://cdn.bulbagarden.net/upload/7/7e/577MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Solosis_(Pok%C3%A9mon)" title="Solosis (Pokémon)">Solosis</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>578</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Duosion_(Pok%C3%A9mon)" title="578"><img alt="578" src="http://cdn.bulbagarden.net/upload/6/64/578MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Duosion_(Pok%C3%A9mon)" title="Duosion (Pokémon)">Duosion</a>
                    </td>
                    <td style="background:#FFFFFF"> 130
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>579</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Reuniclus_(Pok%C3%A9mon)" title="579"><img alt="579" src="http://cdn.bulbagarden.net/upload/7/77/579MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Reuniclus_(Pok%C3%A9mon)" title="Reuniclus (Pokémon)">Reuniclus</a>
                    </td>
                    <td style="background:#FFFFFF"> 221
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>580</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ducklett_(Pok%C3%A9mon)" title="580"><img alt="580" src="http://cdn.bulbagarden.net/upload/e/e7/580MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ducklett_(Pok%C3%A9mon)" title="Ducklett (Pokémon)">Ducklett</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>581</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swanna_(Pok%C3%A9mon)" title="581"><img alt="581" src="http://cdn.bulbagarden.net/upload/e/e8/581MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swanna_(Pok%C3%A9mon)" title="Swanna (Pokémon)">Swanna</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>582</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vanillite_(Pok%C3%A9mon)" title="582"><img alt="582" src="http://cdn.bulbagarden.net/upload/5/51/582MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vanillite_(Pok%C3%A9mon)" title="Vanillite (Pokémon)">Vanillite</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>583</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vanillish_(Pok%C3%A9mon)" title="583"><img alt="583" src="http://cdn.bulbagarden.net/upload/7/70/583MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vanillish_(Pok%C3%A9mon)" title="Vanillish (Pokémon)">Vanillish</a>
                    </td>
                    <td style="background:#FFFFFF"> 138
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>584</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vanilluxe_(Pok%C3%A9mon)" title="584"><img alt="584" src="http://cdn.bulbagarden.net/upload/8/83/584MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vanilluxe_(Pok%C3%A9mon)" title="Vanilluxe (Pokémon)">Vanilluxe</a>
                    </td>
                    <td style="background:#FFFFFF"> 241
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>585</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Deerling_(Pok%C3%A9mon)" title="585"><img alt="585" src="http://cdn.bulbagarden.net/upload/d/d9/585MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Deerling_(Pok%C3%A9mon)" title="Deerling (Pokémon)">Deerling</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>586</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sawsbuck_(Pok%C3%A9mon)" title="586"><img alt="586" src="http://cdn.bulbagarden.net/upload/6/64/586MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sawsbuck_(Pok%C3%A9mon)" title="Sawsbuck (Pokémon)">Sawsbuck</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>587</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Emolga_(Pok%C3%A9mon)" title="587"><img alt="587" src="http://cdn.bulbagarden.net/upload/9/95/587MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Emolga_(Pok%C3%A9mon)" title="Emolga (Pokémon)">Emolga</a>
                    </td>
                    <td style="background:#FFFFFF"> 150
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>588</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Karrablast_(Pok%C3%A9mon)" title="588"><img alt="588" src="http://cdn.bulbagarden.net/upload/c/ca/588MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Karrablast_(Pok%C3%A9mon)" title="Karrablast (Pokémon)">Karrablast</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>589</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Escavalier_(Pok%C3%A9mon)" title="589"><img alt="589" src="http://cdn.bulbagarden.net/upload/0/0e/589MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Escavalier_(Pok%C3%A9mon)" title="Escavalier (Pokémon)">Escavalier</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>590</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Foongus_(Pok%C3%A9mon)" title="590"><img alt="590" src="http://cdn.bulbagarden.net/upload/8/88/590MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Foongus_(Pok%C3%A9mon)" title="Foongus (Pokémon)">Foongus</a>
                    </td>
                    <td style="background:#FFFFFF"> 59
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>591</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Amoonguss_(Pok%C3%A9mon)" title="591"><img alt="591" src="http://cdn.bulbagarden.net/upload/2/23/591MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Amoonguss_(Pok%C3%A9mon)" title="Amoonguss (Pokémon)">Amoonguss</a>
                    </td>
                    <td style="background:#FFFFFF"> 162
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>592</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Frillish_(Pok%C3%A9mon)" title="592"><img alt="592" src="http://cdn.bulbagarden.net/upload/0/09/592MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Frillish_(Pok%C3%A9mon)" title="Frillish (Pokémon)">Frillish</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>593</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Jellicent_(Pok%C3%A9mon)" title="593"><img alt="593" src="http://cdn.bulbagarden.net/upload/7/71/593MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Jellicent_(Pok%C3%A9mon)" title="Jellicent (Pokémon)">Jellicent</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>594</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Alomomola_(Pok%C3%A9mon)" title="594"><img alt="594" src="http://cdn.bulbagarden.net/upload/5/5a/594MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Alomomola_(Pok%C3%A9mon)" title="Alomomola (Pokémon)">Alomomola</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>595</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Joltik_(Pok%C3%A9mon)" title="595"><img alt="595" src="http://cdn.bulbagarden.net/upload/f/f3/595MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Joltik_(Pok%C3%A9mon)" title="Joltik (Pokémon)">Joltik</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>596</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Galvantula_(Pok%C3%A9mon)" title="596"><img alt="596" src="http://cdn.bulbagarden.net/upload/c/c4/596MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Galvantula_(Pok%C3%A9mon)" title="Galvantula (Pokémon)">Galvantula</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>597</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ferroseed_(Pok%C3%A9mon)" title="597"><img alt="597" src="http://cdn.bulbagarden.net/upload/b/b2/597MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ferroseed_(Pok%C3%A9mon)" title="Ferroseed (Pokémon)">Ferroseed</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>598</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Ferrothorn_(Pok%C3%A9mon)" title="598"><img alt="598" src="http://cdn.bulbagarden.net/upload/9/9e/598MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Ferrothorn_(Pok%C3%A9mon)" title="Ferrothorn (Pokémon)">Ferrothorn</a>
                    </td>
                    <td style="background:#FFFFFF"> 171
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>599</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Klink_(Pok%C3%A9mon)" title="599"><img alt="599" src="http://cdn.bulbagarden.net/upload/6/61/599MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Klink_(Pok%C3%A9mon)" title="Klink (Pokémon)">Klink</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>600</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Klang_(Pok%C3%A9mon)" title="600"><img alt="600" src="http://cdn.bulbagarden.net/upload/3/3a/600MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Klang_(Pok%C3%A9mon)" title="Klang (Pokémon)">Klang</a>
                    </td>
                    <td style="background:#FFFFFF"> 154
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>601</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Klinklang_(Pok%C3%A9mon)" title="601"><img alt="601" src="http://cdn.bulbagarden.net/upload/2/25/601MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Klinklang_(Pok%C3%A9mon)" title="Klinklang (Pokémon)">Klinklang</a>
                    </td>
                    <td style="background:#FFFFFF"> 234
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>602</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tynamo_(Pok%C3%A9mon)" title="602"><img alt="602" src="http://cdn.bulbagarden.net/upload/e/e1/602MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tynamo_(Pok%C3%A9mon)" title="Tynamo (Pokémon)">Tynamo</a>
                    </td>
                    <td style="background:#FFFFFF"> 55
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>603</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Eelektrik_(Pok%C3%A9mon)" title="603"><img alt="603" src="http://cdn.bulbagarden.net/upload/c/cb/603MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Eelektrik_(Pok%C3%A9mon)" title="Eelektrik (Pokémon)">Eelektrik</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>604</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Eelektross_(Pok%C3%A9mon)" title="604"><img alt="604" src="http://cdn.bulbagarden.net/upload/0/0f/604MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Eelektross_(Pok%C3%A9mon)" title="Eelektross (Pokémon)">Eelektross</a>
                    </td>
                    <td style="background:#FFFFFF"> 232
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>605</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Elgyem_(Pok%C3%A9mon)" title="605"><img alt="605" src="http://cdn.bulbagarden.net/upload/6/6f/605MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Elgyem_(Pok%C3%A9mon)" title="Elgyem (Pokémon)">Elgyem</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>606</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Beheeyem_(Pok%C3%A9mon)" title="606"><img alt="606" src="http://cdn.bulbagarden.net/upload/5/53/606MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Beheeyem_(Pok%C3%A9mon)" title="Beheeyem (Pokémon)">Beheeyem</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>607</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Litwick_(Pok%C3%A9mon)" title="607"><img alt="607" src="http://cdn.bulbagarden.net/upload/7/7c/607MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Litwick_(Pok%C3%A9mon)" title="Litwick (Pokémon)">Litwick</a>
                    </td>
                    <td style="background:#FFFFFF"> 55
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>608</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Lampent_(Pok%C3%A9mon)" title="608"><img alt="608" src="http://cdn.bulbagarden.net/upload/0/04/608MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Lampent_(Pok%C3%A9mon)" title="Lampent (Pokémon)">Lampent</a>
                    </td>
                    <td style="background:#FFFFFF"> 130
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>609</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chandelure_(Pok%C3%A9mon)" title="609"><img alt="609" src="http://cdn.bulbagarden.net/upload/3/39/609MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chandelure_(Pok%C3%A9mon)" title="Chandelure (Pokémon)">Chandelure</a>
                    </td>
                    <td style="background:#FFFFFF"> 234
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>610</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Axew_(Pok%C3%A9mon)" title="610"><img alt="610" src="http://cdn.bulbagarden.net/upload/0/0c/610MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Axew_(Pok%C3%A9mon)" title="Axew (Pokémon)">Axew</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>611</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Fraxure_(Pok%C3%A9mon)" title="611"><img alt="611" src="http://cdn.bulbagarden.net/upload/1/1d/611MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Fraxure_(Pok%C3%A9mon)" title="Fraxure (Pokémon)">Fraxure</a>
                    </td>
                    <td style="background:#FFFFFF"> 144
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>612</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Haxorus_(Pok%C3%A9mon)" title="612"><img alt="612" src="http://cdn.bulbagarden.net/upload/5/5d/612MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Haxorus_(Pok%C3%A9mon)" title="Haxorus (Pokémon)">Haxorus</a>
                    </td>
                    <td style="background:#FFFFFF"> 243
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>613</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cubchoo_(Pok%C3%A9mon)" title="613"><img alt="613" src="http://cdn.bulbagarden.net/upload/f/fe/613MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cubchoo_(Pok%C3%A9mon)" title="Cubchoo (Pokémon)">Cubchoo</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>614</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Beartic_(Pok%C3%A9mon)" title="614"><img alt="614" src="http://cdn.bulbagarden.net/upload/f/f9/614MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Beartic_(Pok%C3%A9mon)" title="Beartic (Pokémon)">Beartic</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>615</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cryogonal_(Pok%C3%A9mon)" title="615"><img alt="615" src="http://cdn.bulbagarden.net/upload/d/d9/615MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cryogonal_(Pok%C3%A9mon)" title="Cryogonal (Pokémon)">Cryogonal</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>616</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Shelmet_(Pok%C3%A9mon)" title="616"><img alt="616" src="http://cdn.bulbagarden.net/upload/d/da/616MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Shelmet_(Pok%C3%A9mon)" title="Shelmet (Pokémon)">Shelmet</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>617</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Accelgor_(Pok%C3%A9mon)" title="617"><img alt="617" src="http://cdn.bulbagarden.net/upload/3/33/617MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Accelgor_(Pok%C3%A9mon)" title="Accelgor (Pokémon)">Accelgor</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>618</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Stunfisk_(Pok%C3%A9mon)" title="618"><img alt="618" src="http://cdn.bulbagarden.net/upload/3/31/618MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Stunfisk_(Pok%C3%A9mon)" title="Stunfisk (Pokémon)">Stunfisk</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>619</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mienfoo_(Pok%C3%A9mon)" title="619"><img alt="619" src="http://cdn.bulbagarden.net/upload/a/a9/619MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mienfoo_(Pok%C3%A9mon)" title="Mienfoo (Pokémon)">Mienfoo</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>620</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mienshao_(Pok%C3%A9mon)" title="620"><img alt="620" src="http://cdn.bulbagarden.net/upload/e/e4/620MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mienshao_(Pok%C3%A9mon)" title="Mienshao (Pokémon)">Mienshao</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>621</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Druddigon_(Pok%C3%A9mon)" title="621"><img alt="621" src="http://cdn.bulbagarden.net/upload/5/53/621MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Druddigon_(Pok%C3%A9mon)" title="Druddigon (Pokémon)">Druddigon</a>
                    </td>
                    <td style="background:#FFFFFF"> 170
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>622</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Golett_(Pok%C3%A9mon)" title="622"><img alt="622" src="http://cdn.bulbagarden.net/upload/3/3b/622MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Golett_(Pok%C3%A9mon)" title="Golett (Pokémon)">Golett</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>623</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Golurk_(Pok%C3%A9mon)" title="623"><img alt="623" src="http://cdn.bulbagarden.net/upload/8/85/623MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Golurk_(Pok%C3%A9mon)" title="Golurk (Pokémon)">Golurk</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>624</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pawniard_(Pok%C3%A9mon)" title="624"><img alt="624" src="http://cdn.bulbagarden.net/upload/5/59/624MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pawniard_(Pok%C3%A9mon)" title="Pawniard (Pokémon)">Pawniard</a>
                    </td>
                    <td style="background:#FFFFFF"> 68
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>625</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bisharp_(Pok%C3%A9mon)" title="625"><img alt="625" src="http://cdn.bulbagarden.net/upload/3/3e/625MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bisharp_(Pok%C3%A9mon)" title="Bisharp (Pokémon)">Bisharp</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>626</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bouffalant_(Pok%C3%A9mon)" title="626"><img alt="626" src="http://cdn.bulbagarden.net/upload/0/01/626MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bouffalant_(Pok%C3%A9mon)" title="Bouffalant (Pokémon)">Bouffalant</a>
                    </td>
                    <td style="background:#FFFFFF"> 172
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>627</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Rufflet_(Pok%C3%A9mon)" title="627"><img alt="627" src="http://cdn.bulbagarden.net/upload/e/e5/627MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Rufflet_(Pok%C3%A9mon)" title="Rufflet (Pokémon)">Rufflet</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>628</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Braviary_(Pok%C3%A9mon)" title="628"><img alt="628" src="http://cdn.bulbagarden.net/upload/5/54/628MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Braviary_(Pok%C3%A9mon)" title="Braviary (Pokémon)">Braviary</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>629</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vullaby_(Pok%C3%A9mon)" title="629"><img alt="629" src="http://cdn.bulbagarden.net/upload/2/2f/629MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vullaby_(Pok%C3%A9mon)" title="Vullaby (Pokémon)">Vullaby</a>
                    </td>
                    <td style="background:#FFFFFF"> 74
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>630</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Mandibuzz_(Pok%C3%A9mon)" title="630"><img alt="630" src="http://cdn.bulbagarden.net/upload/f/f7/630MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Mandibuzz_(Pok%C3%A9mon)" title="Mandibuzz (Pokémon)">Mandibuzz</a>
                    </td>
                    <td style="background:#FFFFFF"> 179
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>631</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Heatmor_(Pok%C3%A9mon)" title="631"><img alt="631" src="http://cdn.bulbagarden.net/upload/e/e2/631MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Heatmor_(Pok%C3%A9mon)" title="Heatmor (Pokémon)">Heatmor</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>632</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Durant_(Pok%C3%A9mon)" title="632"><img alt="632" src="http://cdn.bulbagarden.net/upload/a/a4/632MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Durant_(Pok%C3%A9mon)" title="Durant (Pokémon)">Durant</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>633</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Deino_(Pok%C3%A9mon)" title="633"><img alt="633" src="http://cdn.bulbagarden.net/upload/3/39/633MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Deino_(Pok%C3%A9mon)" title="Deino (Pokémon)">Deino</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>634</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zweilous_(Pok%C3%A9mon)" title="634"><img alt="634" src="http://cdn.bulbagarden.net/upload/6/69/634MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zweilous_(Pok%C3%A9mon)" title="Zweilous (Pokémon)">Zweilous</a>
                    </td>
                    <td style="background:#FFFFFF"> 147
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>635</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hydreigon_(Pok%C3%A9mon)" title="635"><img alt="635" src="http://cdn.bulbagarden.net/upload/8/83/635MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hydreigon_(Pok%C3%A9mon)" title="Hydreigon (Pokémon)">Hydreigon</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>636</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Larvesta_(Pok%C3%A9mon)" title="636"><img alt="636" src="http://cdn.bulbagarden.net/upload/0/09/636MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Larvesta_(Pok%C3%A9mon)" title="Larvesta (Pokémon)">Larvesta</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>637</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Volcarona_(Pok%C3%A9mon)" title="637"><img alt="637" src="http://cdn.bulbagarden.net/upload/7/78/637MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Volcarona_(Pok%C3%A9mon)" title="Volcarona (Pokémon)">Volcarona</a>
                    </td>
                    <td style="background:#FFFFFF"> 248
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>638</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Cobalion_(Pok%C3%A9mon)" title="638"><img alt="638" src="http://cdn.bulbagarden.net/upload/3/36/638MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Cobalion_(Pok%C3%A9mon)" title="Cobalion (Pokémon)">Cobalion</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>639</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Terrakion_(Pok%C3%A9mon)" title="639"><img alt="639" src="http://cdn.bulbagarden.net/upload/5/5d/639MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Terrakion_(Pok%C3%A9mon)" title="Terrakion (Pokémon)">Terrakion</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>640</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Virizion_(Pok%C3%A9mon)" title="640"><img alt="640" src="http://cdn.bulbagarden.net/upload/6/60/640MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Virizion_(Pok%C3%A9mon)" title="Virizion (Pokémon)">Virizion</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>641</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tornadus_(Pok%C3%A9mon)" title="641"><img alt="641" src="http://cdn.bulbagarden.net/upload/1/13/641MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tornadus_(Pok%C3%A9mon)" title="Tornadus (Pokémon)">Tornadus</a> <small>(Incarnate Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>641</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tornadus_(Pok%C3%A9mon)" title="641T"><img alt="641T" src="http://cdn.bulbagarden.net/upload/3/33/641TMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tornadus_(Pok%C3%A9mon)" title="Tornadus (Pokémon)">Tornadus</a> <small>(Therian Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>642</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Thundurus_(Pok%C3%A9mon)" title="642"><img alt="642" src="http://cdn.bulbagarden.net/upload/b/b4/642MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Thundurus_(Pok%C3%A9mon)" title="Thundurus (Pokémon)">Thundurus</a> <small>(Incarnate Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>642</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Thundurus_(Pok%C3%A9mon)" title="642T"><img alt="642T" src="http://cdn.bulbagarden.net/upload/7/73/642TMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Thundurus_(Pok%C3%A9mon)" title="Thundurus (Pokémon)">Thundurus</a> <small>(Therian Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>643</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Reshiram_(Pok%C3%A9mon)" title="643"><img alt="643" src="http://cdn.bulbagarden.net/upload/0/03/643MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Reshiram_(Pok%C3%A9mon)" title="Reshiram (Pokémon)">Reshiram</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>644</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zekrom_(Pok%C3%A9mon)" title="644"><img alt="644" src="http://cdn.bulbagarden.net/upload/b/b2/644MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zekrom_(Pok%C3%A9mon)" title="Zekrom (Pokémon)">Zekrom</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>645</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Landorus_(Pok%C3%A9mon)" title="645"><img alt="645" src="http://cdn.bulbagarden.net/upload/a/a4/645MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Landorus_(Pok%C3%A9mon)" title="Landorus (Pokémon)">Landorus</a> <small>(Incarnate Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>645</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Landorus_(Pok%C3%A9mon)" title="645T"><img alt="645T" src="http://cdn.bulbagarden.net/upload/f/f9/645TMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Landorus_(Pok%C3%A9mon)" title="Landorus (Pokémon)">Landorus</a> <small>(Therian Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>646</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kyurem_(Pok%C3%A9mon)" title="646"><img alt="646" src="http://cdn.bulbagarden.net/upload/1/12/646MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kyurem_(Pok%C3%A9mon)" title="Kyurem (Pokémon)">Kyurem</a>
                    </td>
                    <td style="background:#FFFFFF"> 297
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>646</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kyurem_(Pok%C3%A9mon)" title="646B"><img alt="646B" src="http://cdn.bulbagarden.net/upload/c/c0/646BMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kyurem_(Pok%C3%A9mon)" title="Kyurem (Pokémon)">Kyurem</a> <small>(Black Kyurem)</small>
                    </td>
                    <td style="background:#FFFFFF"> 297
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 3
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>646</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Kyurem_(Pok%C3%A9mon)" title="646W"><img alt="646W" src="http://cdn.bulbagarden.net/upload/7/74/646WMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Kyurem_(Pok%C3%A9mon)" title="Kyurem (Pokémon)">Kyurem</a> <small>(White Kyurem)</small>
                    </td>
                    <td style="background:#FFFFFF"> 297
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>647</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Keldeo_(Pok%C3%A9mon)" title="647"><img alt="647" src="http://cdn.bulbagarden.net/upload/7/78/647MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Keldeo_(Pok%C3%A9mon)" title="Keldeo (Pokémon)">Keldeo</a>
                    </td>
                    <td style="background:#FFFFFF"> 261
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>648</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Meloetta_(Pok%C3%A9mon)" title="648"><img alt="648" src="http://cdn.bulbagarden.net/upload/1/1f/648MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Meloetta_(Pok%C3%A9mon)" title="Meloetta (Pokémon)">Meloetta</a> <small>(Aria Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>648</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Meloetta_(Pok%C3%A9mon)" title="648P"><img alt="648P" src="http://cdn.bulbagarden.net/upload/9/93/648PMS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Meloetta_(Pok%C3%A9mon)" title="Meloetta (Pokémon)">Meloetta</a> <small>(Pirouette Forme)</small>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>649</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Genesect_(Pok%C3%A9mon)" title="649"><img alt="649" src="http://cdn.bulbagarden.net/upload/1/17/649MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Genesect_(Pok%C3%A9mon)" title="Genesect (Pokémon)">Genesect</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>650</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chespin_(Pok%C3%A9mon)" title="650"><img alt="650" src="http://cdn.bulbagarden.net/upload/6/67/650MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chespin_(Pok%C3%A9mon)" title="Chespin (Pokémon)">Chespin</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>651</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Quilladin_(Pok%C3%A9mon)" title="651"><img alt="651" src="http://cdn.bulbagarden.net/upload/b/bf/651MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Quilladin_(Pok%C3%A9mon)" title="Quilladin (Pokémon)">Quilladin</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>652</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Chesnaught_(Pok%C3%A9mon)" title="652"><img alt="652" src="http://cdn.bulbagarden.net/upload/1/1c/652MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Chesnaught_(Pok%C3%A9mon)" title="Chesnaught (Pokémon)">Chesnaught</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 3
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>653</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Fennekin_(Pok%C3%A9mon)" title="653"><img alt="653" src="http://cdn.bulbagarden.net/upload/f/f9/653MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Fennekin_(Pok%C3%A9mon)" title="Fennekin (Pokémon)">Fennekin</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>654</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Braixen_(Pok%C3%A9mon)" title="654"><img alt="654" src="http://cdn.bulbagarden.net/upload/6/62/654MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Braixen_(Pok%C3%A9mon)" title="Braixen (Pokémon)">Braixen</a>
                    </td>
                    <td style="background:#FFFFFF"> 143
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>655</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Delphox_(Pok%C3%A9mon)" title="655"><img alt="655" src="http://cdn.bulbagarden.net/upload/f/f8/655MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Delphox_(Pok%C3%A9mon)" title="Delphox (Pokémon)">Delphox</a>
                    </td>
                    <td style="background:#FFFFFF"> 240
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>656</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Froakie_(Pok%C3%A9mon)" title="656"><img alt="656" src="http://cdn.bulbagarden.net/upload/d/d4/656MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Froakie_(Pok%C3%A9mon)" title="Froakie (Pokémon)">Froakie</a>
                    </td>
                    <td style="background:#FFFFFF"> 63
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>657</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Frogadier_(Pok%C3%A9mon)" title="657"><img alt="657" src="http://cdn.bulbagarden.net/upload/1/15/657MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Frogadier_(Pok%C3%A9mon)" title="Frogadier (Pokémon)">Frogadier</a>
                    </td>
                    <td style="background:#FFFFFF"> 142
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>658</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Greninja_(Pok%C3%A9mon)" title="658"><img alt="658" src="http://cdn.bulbagarden.net/upload/8/87/658MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Greninja_(Pok%C3%A9mon)" title="Greninja (Pokémon)">Greninja</a>
                    </td>
                    <td style="background:#FFFFFF"> 239
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>659</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bunnelby_(Pok%C3%A9mon)" title="659"><img alt="659" src="http://cdn.bulbagarden.net/upload/e/e2/659MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bunnelby_(Pok%C3%A9mon)" title="Bunnelby (Pokémon)">Bunnelby</a>
                    </td>
                    <td style="background:#FFFFFF"> 47
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>660</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Diggersby_(Pok%C3%A9mon)" title="660"><img alt="660" src="http://cdn.bulbagarden.net/upload/0/05/660MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Diggersby_(Pok%C3%A9mon)" title="Diggersby (Pokémon)">Diggersby</a>
                    </td>
                    <td style="background:#FFFFFF"> 148
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>661</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Fletchling_(Pok%C3%A9mon)" title="661"><img alt="661" src="http://cdn.bulbagarden.net/upload/9/9c/661MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Fletchling_(Pok%C3%A9mon)" title="Fletchling (Pokémon)">Fletchling</a>
                    </td>
                    <td style="background:#FFFFFF"> 56
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>662</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Fletchinder_(Pok%C3%A9mon)" title="662"><img alt="662" src="http://cdn.bulbagarden.net/upload/5/56/662MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Fletchinder_(Pok%C3%A9mon)" title="Fletchinder (Pokémon)">Fletchinder</a>
                    </td>
                    <td style="background:#FFFFFF"> 134
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>663</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Talonflame_(Pok%C3%A9mon)" title="663"><img alt="663" src="http://cdn.bulbagarden.net/upload/8/81/663MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Talonflame_(Pok%C3%A9mon)" title="Talonflame (Pokémon)">Talonflame</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 3
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>664</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Scatterbug_(Pok%C3%A9mon)" title="664"><img alt="664" src="http://cdn.bulbagarden.net/upload/e/e0/664MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Scatterbug_(Pok%C3%A9mon)" title="Scatterbug (Pokémon)">Scatterbug</a>
                    </td>
                    <td style="background:#FFFFFF"> 40
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>665</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spewpa_(Pok%C3%A9mon)" title="665"><img alt="665" src="http://cdn.bulbagarden.net/upload/8/8e/665MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spewpa_(Pok%C3%A9mon)" title="Spewpa (Pokémon)">Spewpa</a>
                    </td>
                    <td style="background:#FFFFFF"> 75
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>666</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Vivillon_(Pok%C3%A9mon)" title="666"><img alt="666" src="http://cdn.bulbagarden.net/upload/c/c5/666MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Vivillon_(Pok%C3%A9mon)" title="Vivillon (Pokémon)">Vivillon</a>
                    </td>
                    <td style="background:#FFFFFF"> 185
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>667</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Litleo_(Pok%C3%A9mon)" title="667"><img alt="667" src="http://cdn.bulbagarden.net/upload/8/80/667MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Litleo_(Pok%C3%A9mon)" title="Litleo (Pokémon)">Litleo</a>
                    </td>
                    <td style="background:#FFFFFF"> 74
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>668</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pyroar_(Pok%C3%A9mon)" title="668"><img alt="668" src="http://cdn.bulbagarden.net/upload/0/0c/668MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pyroar_(Pok%C3%A9mon)" title="Pyroar (Pokémon)">Pyroar</a>
                    </td>
                    <td style="background:#FFFFFF"> 177
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>669</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Flab%C3%A9b%C3%A9_(Pok%C3%A9mon)" title="669"><img alt="669" src="http://cdn.bulbagarden.net/upload/3/38/669MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Flab%C3%A9b%C3%A9_(Pok%C3%A9mon)" title="Flabébé (Pokémon)">Flabébé</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>670</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Floette_(Pok%C3%A9mon)" title="670"><img alt="670" src="http://cdn.bulbagarden.net/upload/0/04/670MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Floette_(Pok%C3%A9mon)" title="Floette (Pokémon)">Floette</a>
                    </td>
                    <td style="background:#FFFFFF"> 130
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>671</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Florges_(Pok%C3%A9mon)" title="671"><img alt="671" src="http://cdn.bulbagarden.net/upload/e/ea/671MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Florges_(Pok%C3%A9mon)" title="Florges (Pokémon)">Florges</a>
                    </td>
                    <td style="background:#FFFFFF"> 248
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>672</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skiddo_(Pok%C3%A9mon)" title="672"><img alt="672" src="http://cdn.bulbagarden.net/upload/0/04/672MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skiddo_(Pok%C3%A9mon)" title="Skiddo (Pokémon)">Skiddo</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>673</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gogoat_(Pok%C3%A9mon)" title="673"><img alt="673" src="http://cdn.bulbagarden.net/upload/7/71/673MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gogoat_(Pok%C3%A9mon)" title="Gogoat (Pokémon)">Gogoat</a>
                    </td>
                    <td style="background:#FFFFFF"> 186
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>674</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pancham_(Pok%C3%A9mon)" title="674"><img alt="674" src="http://cdn.bulbagarden.net/upload/f/f8/674MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pancham_(Pok%C3%A9mon)" title="Pancham (Pokémon)">Pancham</a>
                    </td>
                    <td style="background:#FFFFFF"> 70
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>675</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pangoro_(Pok%C3%A9mon)" title="675"><img alt="675" src="http://cdn.bulbagarden.net/upload/3/39/675MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pangoro_(Pok%C3%A9mon)" title="Pangoro (Pokémon)">Pangoro</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>676</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Furfrou_(Pok%C3%A9mon)" title="676"><img alt="676" src="http://cdn.bulbagarden.net/upload/c/c4/676MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Furfrou_(Pok%C3%A9mon)" title="Furfrou (Pokémon)">Furfrou</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>677</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Espurr_(Pok%C3%A9mon)" title="677"><img alt="677" src="http://cdn.bulbagarden.net/upload/2/21/677MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Espurr_(Pok%C3%A9mon)" title="Espurr (Pokémon)">Espurr</a>
                    </td>
                    <td style="background:#FFFFFF"> 71
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>678</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Meowstic_(Pok%C3%A9mon)" title="678"><img alt="678" src="http://cdn.bulbagarden.net/upload/7/70/678MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Meowstic_(Pok%C3%A9mon)" title="Meowstic (Pokémon)">Meowstic</a>
                    </td>
                    <td style="background:#FFFFFF"> 163
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>679</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Honedge_(Pok%C3%A9mon)" title="679"><img alt="679" src="http://cdn.bulbagarden.net/upload/0/04/679MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Honedge_(Pok%C3%A9mon)" title="Honedge (Pokémon)">Honedge</a>
                    </td>
                    <td style="background:#FFFFFF"> 65
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>680</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Doublade_(Pok%C3%A9mon)" title="680"><img alt="680" src="http://cdn.bulbagarden.net/upload/a/a0/680MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Doublade_(Pok%C3%A9mon)" title="Doublade (Pokémon)">Doublade</a>
                    </td>
                    <td style="background:#FFFFFF"> 157
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>681</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aegislash_(Pok%C3%A9mon)" title="681"><img alt="681" src="http://cdn.bulbagarden.net/upload/3/37/681MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aegislash_(Pok%C3%A9mon)" title="Aegislash (Pokémon)">Aegislash</a>
                    </td>
                    <td style="background:#FFFFFF"> 234
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>682</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Spritzee_(Pok%C3%A9mon)" title="682"><img alt="682" src="http://cdn.bulbagarden.net/upload/4/47/682MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Spritzee_(Pok%C3%A9mon)" title="Spritzee (Pokémon)">Spritzee</a>
                    </td>
                    <td style="background:#FFFFFF"> 68
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>683</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aromatisse_(Pok%C3%A9mon)" title="683"><img alt="683" src="http://cdn.bulbagarden.net/upload/b/b3/683MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aromatisse_(Pok%C3%A9mon)" title="Aromatisse (Pokémon)">Aromatisse</a>
                    </td>
                    <td style="background:#FFFFFF"> 162
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>684</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Swirlix_(Pok%C3%A9mon)" title="684"><img alt="684" src="http://cdn.bulbagarden.net/upload/c/c0/684MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Swirlix_(Pok%C3%A9mon)" title="Swirlix (Pokémon)">Swirlix</a>
                    </td>
                    <td style="background:#FFFFFF"> 68
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>685</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Slurpuff_(Pok%C3%A9mon)" title="685"><img alt="685" src="http://cdn.bulbagarden.net/upload/c/cd/685MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Slurpuff_(Pok%C3%A9mon)" title="Slurpuff (Pokémon)">Slurpuff</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>686</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Inkay_(Pok%C3%A9mon)" title="686"><img alt="686" src="http://cdn.bulbagarden.net/upload/6/63/686MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Inkay_(Pok%C3%A9mon)" title="Inkay (Pokémon)">Inkay</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>687</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Malamar_(Pok%C3%A9mon)" title="687"><img alt="687" src="http://cdn.bulbagarden.net/upload/8/89/687MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Malamar_(Pok%C3%A9mon)" title="Malamar (Pokémon)">Malamar</a>
                    </td>
                    <td style="background:#FFFFFF"> 169
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>688</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Binacle_(Pok%C3%A9mon)" title="688"><img alt="688" src="http://cdn.bulbagarden.net/upload/7/77/688MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Binacle_(Pok%C3%A9mon)" title="Binacle (Pokémon)">Binacle</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>689</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Barbaracle_(Pok%C3%A9mon)" title="689"><img alt="689" src="http://cdn.bulbagarden.net/upload/a/aa/689MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Barbaracle_(Pok%C3%A9mon)" title="Barbaracle (Pokémon)">Barbaracle</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>690</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Skrelp_(Pok%C3%A9mon)" title="690"><img alt="690" src="http://cdn.bulbagarden.net/upload/4/40/690MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Skrelp_(Pok%C3%A9mon)" title="Skrelp (Pokémon)">Skrelp</a>
                    </td>
                    <td style="background:#FFFFFF"> 64
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>691</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dragalge_(Pok%C3%A9mon)" title="691"><img alt="691" src="http://cdn.bulbagarden.net/upload/f/f0/691MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dragalge_(Pok%C3%A9mon)" title="Dragalge (Pokémon)">Dragalge</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>692</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Clauncher_(Pok%C3%A9mon)" title="692"><img alt="692" src="http://cdn.bulbagarden.net/upload/6/68/692MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Clauncher_(Pok%C3%A9mon)" title="Clauncher (Pokémon)">Clauncher</a>
                    </td>
                    <td style="background:#FFFFFF"> 66
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>693</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Clawitzer_(Pok%C3%A9mon)" title="693"><img alt="693" src="http://cdn.bulbagarden.net/upload/d/d8/693MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Clawitzer_(Pok%C3%A9mon)" title="Clawitzer (Pokémon)">Clawitzer</a>
                    </td>
                    <td style="background:#FFFFFF"> 100
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 2
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>694</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Helioptile_(Pok%C3%A9mon)" title="694"><img alt="694" src="http://cdn.bulbagarden.net/upload/f/f7/694MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Helioptile_(Pok%C3%A9mon)" title="Helioptile (Pokémon)">Helioptile</a>
                    </td>
                    <td style="background:#FFFFFF"> 58
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>695</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Heliolisk_(Pok%C3%A9mon)" title="695"><img alt="695" src="http://cdn.bulbagarden.net/upload/3/3f/695MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Heliolisk_(Pok%C3%A9mon)" title="Heliolisk (Pokémon)">Heliolisk</a>
                    </td>
                    <td style="background:#FFFFFF"> 168
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 1
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>696</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tyrunt_(Pok%C3%A9mon)" title="696"><img alt="696" src="http://cdn.bulbagarden.net/upload/c/c1/696MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tyrunt_(Pok%C3%A9mon)" title="Tyrunt (Pokémon)">Tyrunt</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>697</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Tyrantrum_(Pok%C3%A9mon)" title="697"><img alt="697" src="http://cdn.bulbagarden.net/upload/2/29/697MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Tyrantrum_(Pok%C3%A9mon)" title="Tyrantrum (Pokémon)">Tyrantrum</a>
                    </td>
                    <td style="background:#FFFFFF"> 182
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>698</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Amaura_(Pok%C3%A9mon)" title="698"><img alt="698" src="http://cdn.bulbagarden.net/upload/a/a4/698MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Amaura_(Pok%C3%A9mon)" title="Amaura (Pokémon)">Amaura</a>
                    </td>
                    <td style="background:#FFFFFF"> 72
                    </td>
                    <td style="background:#FF5959"> 1
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>699</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Aurorus_(Pok%C3%A9mon)" title="699"><img alt="699" src="http://cdn.bulbagarden.net/upload/8/8e/699MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Aurorus_(Pok%C3%A9mon)" title="Aurorus (Pokémon)">Aurorus</a>
                    </td>
                    <td style="background:#FFFFFF"> 104
                    </td>
                    <td style="background:#FF5959"> 2
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>700</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sylveon_(Pok%C3%A9mon)" title="700"><img alt="700" src="http://cdn.bulbagarden.net/upload/4/49/700MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sylveon_(Pok%C3%A9mon)" title="Sylveon (Pokémon)">Sylveon</a>
                    </td>
                    <td style="background:#FFFFFF"> 184
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>701</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hawlucha_(Pok%C3%A9mon)" title="701"><img alt="701" src="http://cdn.bulbagarden.net/upload/0/04/701MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hawlucha_(Pok%C3%A9mon)" title="Hawlucha (Pokémon)">Hawlucha</a>
                    </td>
                    <td style="background:#FFFFFF"> 175
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>702</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Dedenne_(Pok%C3%A9mon)" title="702"><img alt="702" src="http://cdn.bulbagarden.net/upload/4/43/702MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Dedenne_(Pok%C3%A9mon)" title="Dedenne (Pokémon)">Dedenne</a>
                    </td>
                    <td style="background:#FFFFFF"> 151
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>703</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Carbink_(Pok%C3%A9mon)" title="703"><img alt="703" src="http://cdn.bulbagarden.net/upload/5/5b/703MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Carbink_(Pok%C3%A9mon)" title="Carbink (Pokémon)">Carbink</a>
                    </td>
                    <td style="background:#FFFFFF"> 100
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>704</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Goomy_(Pok%C3%A9mon)" title="704"><img alt="704" src="http://cdn.bulbagarden.net/upload/5/5d/704MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Goomy_(Pok%C3%A9mon)" title="Goomy (Pokémon)">Goomy</a>
                    </td>
                    <td style="background:#FFFFFF"> 60
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 1
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>705</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Sliggoo_(Pok%C3%A9mon)" title="705"><img alt="705" src="http://cdn.bulbagarden.net/upload/b/b9/705MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Sliggoo_(Pok%C3%A9mon)" title="Sliggoo (Pokémon)">Sliggoo</a>
                    </td>
                    <td style="background:#FFFFFF"> 158
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>706</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Goodra_(Pok%C3%A9mon)" title="706"><img alt="706" src="http://cdn.bulbagarden.net/upload/3/3c/706MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Goodra_(Pok%C3%A9mon)" title="Goodra (Pokémon)">Goodra</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 3
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>707</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Klefki_(Pok%C3%A9mon)" title="707"><img alt="707" src="http://cdn.bulbagarden.net/upload/2/21/707MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Klefki_(Pok%C3%A9mon)" title="Klefki (Pokémon)">Klefki</a>
                    </td>
                    <td style="background:#FFFFFF"> 165
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>708</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Phantump_(Pok%C3%A9mon)" title="708"><img alt="708" src="http://cdn.bulbagarden.net/upload/e/e2/708MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Phantump_(Pok%C3%A9mon)" title="Phantump (Pokémon)">Phantump</a>
                    </td>
                    <td style="background:#FFFFFF"> 62
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 1
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>709</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Trevenant_(Pok%C3%A9mon)" title="709"><img alt="709" src="http://cdn.bulbagarden.net/upload/f/ff/709MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Trevenant_(Pok%C3%A9mon)" title="Trevenant (Pokémon)">Trevenant</a>
                    </td>
                    <td style="background:#FFFFFF"> 166
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 2
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>710</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Pumpkaboo_(Pok%C3%A9mon)" title="710"><img alt="710" src="http://cdn.bulbagarden.net/upload/5/5e/710MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Pumpkaboo_(Pok%C3%A9mon)" title="Pumpkaboo (Pokémon)">Pumpkaboo</a>
                    </td>
                    <td style="background:#FFFFFF"> 67
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>711</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Gourgeist_(Pok%C3%A9mon)" title="711"><img alt="711" src="http://cdn.bulbagarden.net/upload/f/f9/711MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Gourgeist_(Pok%C3%A9mon)" title="Gourgeist (Pokémon)">Gourgeist</a>
                    </td>
                    <td style="background:#FFFFFF"> 173
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>712</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Bergmite_(Pok%C3%A9mon)" title="712"><img alt="712" src="http://cdn.bulbagarden.net/upload/f/fc/712MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Bergmite_(Pok%C3%A9mon)" title="Bergmite (Pokémon)">Bergmite</a>
                    </td>
                    <td style="background:#FFFFFF"> 61
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>713</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Avalugg_(Pok%C3%A9mon)" title="713"><img alt="713" src="http://cdn.bulbagarden.net/upload/5/53/713MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Avalugg_(Pok%C3%A9mon)" title="Avalugg (Pokémon)">Avalugg</a>
                    </td>
                    <td style="background:#FFFFFF"> 180
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 2
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>714</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Noibat_(Pok%C3%A9mon)" title="714"><img alt="714" src="http://cdn.bulbagarden.net/upload/d/d0/714MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Noibat_(Pok%C3%A9mon)" title="Noibat (Pokémon)">Noibat</a>
                    </td>
                    <td style="background:#FFFFFF"> 49
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 1
                    </td>
                    <td style="background:#FFFFFF"> 1
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>715</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Noivern_(Pok%C3%A9mon)" title="715"><img alt="715" src="http://cdn.bulbagarden.net/upload/4/4f/715MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Noivern_(Pok%C3%A9mon)" title="Noivern (Pokémon)">Noivern</a>
                    </td>
                    <td style="background:#FFFFFF"> 187
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 2
                    </td>
                    <td style="background:#FFFFFF"> 2
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>716</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Xerneas_(Pok%C3%A9mon)" title="716"><img alt="716" src="http://cdn.bulbagarden.net/upload/4/45/716MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Xerneas_(Pok%C3%A9mon)" title="Xerneas (Pokémon)">Xerneas</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>717</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Yveltal_(Pok%C3%A9mon)" title="717"><img alt="717" src="http://cdn.bulbagarden.net/upload/c/c1/717MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Yveltal_(Pok%C3%A9mon)" title="Yveltal (Pokémon)">Yveltal</a>
                    </td>
                    <td style="background:#FFFFFF"> 306
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>718</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Zygarde_(Pok%C3%A9mon)" title="718"><img alt="718" src="http://cdn.bulbagarden.net/upload/0/02/718MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Zygarde_(Pok%C3%A9mon)" title="Zygarde (Pokémon)">Zygarde</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 3
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>719</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Diancie_(Pok%C3%A9mon)" title="719"><img alt="719" src="http://cdn.bulbagarden.net/upload/5/53/719MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Diancie_(Pok%C3%A9mon)" title="Diancie (Pokémon)">Diancie</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 1
                    </td>
                    <td style="background:#9DB7F5"> 0
                    </td>
                    <td style="background:#A7DB8D"> 2
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>720</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Hoopa_(Pok%C3%A9mon)" title="720"><img alt="720" src="http://cdn.bulbagarden.net/upload/d/d0/720MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Hoopa_(Pok%C3%A9mon)" title="Hoopa (Pokémon)">Hoopa</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr>
                <tr align="center" style="background:#FFFFFF">
                    <td align="right"> <b>721</b>
                    </td>
                    <td> <span class="plainlinks"><a href="/wiki/Volcanion_(Pok%C3%A9mon)" title="721"><img alt="721" src="http://cdn.bulbagarden.net/upload/e/e4/721MS.png" width="40" height="40"></a></span>
                    </td>
                    <td align="left"> <a href="/wiki/Volcanion_(Pok%C3%A9mon)" title="Volcanion (Pokémon)">Volcanion</a>
                    </td>
                    <td style="background:#FFFFFF"> 270
                    </td>
                    <td style="background:#FF5959"> 0
                    </td>
                    <td style="background:#F5AC78"> 0
                    </td>
                    <td style="background:#FAE078"> 0
                    </td>
                    <td style="background:#9DB7F5"> 3
                    </td>
                    <td style="background:#A7DB8D"> 0
                    </td>
                    <td style="background:#FA92B2"> 0
                    </td>
                    <td style="background:#FFFFFF"> 3
                    </td></tr></tbody><tfoot></tfoot></table>
        </div>
    </div>

    <script>
        $("#refresh_database").click(function () {


            $('tr[align="center"]').each(function (i, el) {
                var regex = /(<([^>]+)>)/ig;
                var pokemon_id_raw = $(this).children().html();


                var pokemon_id = pokemon_id_raw.replace(regex, "").replace(/\s/g, '');
                var pokemon_name = $(this).children('td').children('a').html().replace(/\s/g, '');
                var pokemon_exp =  $(this).children('td[style="background:#FFFFFF"]').html().replace(/\s/g, '');

                var hp =  $(this).children('td[style="background:#FF5959"]').html().replace(/\s/g, '');
                var attack =  $(this).children('td[style="background:#F5AC78"]').html().replace(/\s/g, '');
                var defense = $(this).children('td[style="background:#FAE078"]').html().replace(/\s/g, '');
                var sp_attack = $(this).children('td[style="background:#9DB7F5"]').html().replace(/\s/g, '');
                var sp_defense = $(this).children('td[style="background:#A7DB8D"]').html().replace(/\s/g, '');
                var speed = $(this).children('td[style="background:#FA92B2"]').html().replace(/\s/g, '');
                var total = $(this).children().last().html().replace(/\s/g, '');



                $.ajax({
                    type: "POST",
                    url: "/refresh_database/",
                    dataType: 'jsonp',
                    data: {
                        pokemon_id: pokemon_id,
                        pokemon_name: pokemon_name,
                        pokemon_exp: pokemon_exp,
                        hp: hp,
                        attack:attack,
                        defense:defense,
                        sp_attack:sp_attack,
                        sp_defense:sp_defense,
                        speed:speed,
                        total:total,
                        _token: '{{csrf_token()}}'
                    },

                    success: function (parsedResponse) {
                        data.empty();



                    }
                })

                console.log(hp,attack,defense,sp_attack,sp_defense,speed,total);


            });


        });

    </script>

@endsection