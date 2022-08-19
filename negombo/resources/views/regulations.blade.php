@extends('layouts.usermaster')

@section('section')
  <div class="container-fluid padding20">
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <div class="card">
            <div class="card-header">
              <h3><strong>{{ (__('Terms and Regulations')) }}</strong></h3>
            </div>
            <div class="card-body">
              {{-- <iframe src="{{ asset('images/docs/regulations.pdf') }}" width="100%" height="1000px" /></iframe> --}}
              <p align="center"><span style="color: #1f3864;"><span style="font-size: x-large;">{{ __('THERMAL PARK NEGOMBO') }}</span></span></p>
              <p align="center"><span style="color: #1f3864;"><span style="font-size: large;">{{ __('ANTI DIFFUSION COVID-19 PLAN') }}</span></span></p>

              <p align="center">&nbsp;</p>
              <p style="text-align: center;" align="center"><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>{{__("SARS-COV2 ANTI-SPREAD SAFETY PROTOCOL")}}</strong></span></span></p>
              <p style="text-align: center;" align="center"><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>{{__("UNIT REGIONAL CRISIS UNDER DECREE P.G.R.C. N. 51 OF 20.03.20")}}</strong></span></span></p>
              <p style="text-align: center;" align="center"><span style="color: #1f3864;"> <span style="font-size: xx-small;"><strong>{{__("- Annex sub 1 to the Ordinance no.52 of 26.05.20 -") }}</strong></span></span></p>
              <p style="text-align: center;"><span style="color: #ff0000;"><span style="font-size: xx-small;"><strong>*</strong></span></span><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>{{ __("IN CONTINUITY WITH THE PROTOCOL SHARED BY THE SOCIAL PARTIES") }}</strong></span></span><span style="color: #ff0000;"><span style="font-size: xx-small;"><strong>*</strong></span></span></p>
              <p align="center"><span style="color: #1f3864;"><span style="font-size: xx-small;"><strong>{{__("APPROVED WITH D.P.C.M. OF 26 APRIL 2020 as well as with the general criteria of the documents produced by the Inail and the Higher Institute of Health")}}</strong></span></span></p>
              <p align="center">&nbsp;</p>
              <p align="center"><span style="color: #ff0000;"><span style="font-size: medium;"><strong>{{__("CUSTOMERS ARE REQUIRED TO FOLLOW THE PROVISIONS CONTAINED IN THIS SECURITY PROTOCOL:")}}</strong></span></span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 1</strong></u></span><span style="color: #1f3864;"> {{__("- At the entrance to the spa park, under the umbrellas and near the cash desk, appropriate information signs are displayed. The use of the swimming pools and the beach, due to Covid-19, is subject to restrictions and will be different from previous years, in particular access to the “Hamam” Turkish bath, to the “Bolla di Giada” pools and to the “Black Hole”, for this we ask for your understanding.")}}</span></p>
              <p align="justify"><a name="_GoBack"></a> <span style="color: #1f3864;"><u><strong>ART. 2</strong></u></span><span style="color: #1f3864;"> {{__("- To avoid crowds, access to the spa park can be made by booking. The use of the mask for access and exit is mandatory; this obligation always applies except when you are under an umbrella or in the pool or in the sea. While waiting to go to the cash desk of the spa park and to leave the establishment, the distancing must be respected. Body temperature can always be detected, preventing access in the event of a temperature above 37.5 °. The mixed use of umbrellas is prohibited, with the exception of members of the same family unit, or for individuals who share the same housing unit, or with people who, according to the provisions in force, are not subject to interpersonal distancing. At the first access to the thermal park of subscribers and / or day customers, they will be accompanied to the umbrella assigned to them by an employee who will explain the rules to be followed. Swimming is not allowed inside the swimming pools (except for the Olympic swimming pool) so an area of ​​4 square meters will be calculated for each guest. Entrance to the pools will be regulated as follows:")}}</span></p>
              <div id="TextSection" dir="ltr">
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 13 Jacuzzi Hydromassages (3.50 sqm) and Nr 6 Balze Hydromassage Pool (7 sqm): 1 person, except for those belonging to the same family or cohabiting, or who, according to the provisions in force, are not subject to distancing interpersonal.")}}</span></span></span></span></span></p>
              {{-- <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">- </span></span><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">Nr 29</span></span></span> <span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">Piscina Circolare (mq. 28,50): 7 persone. </span></span></span></span></span></p> --}}
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 29 Circular Swimming Pool (28.50 sq m): 7 people.")}} </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 26 Large Thermal Pool (340 square meters): 85 people.")}} </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 22 Thermal Pool (51.50 square meters): 12 people.")}} </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 11 Olympic swimming pool (495 sq m): 70 people.")}} </span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 12 Arco swimming pool (34.10 sq ): 8 people.")}} </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 7 Labyrinth swimming pool (2 pools 15 sq m + 15 sq m): 3 people for each pool - Nr 5 Maya swimming pool (18° - 8.50 sq m; 40° - 33.00 sq m): 18° - 2 people; 40th -8 people.")}} </span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 2 Templar Pool (110 sq m): 9 people (1 person per shower).")}}</span></span></span></span></span></p>
              <p align="left"><span style="color: #1f3864;"> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__("- Nr 3 Nesti swimming pool (85 square meters): 21 people.")}}</span></span></span></span></span></p>
              <p align="left"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><u>NB:</u></span></span></span><span style="color: #1f3864;"><span style="font-family: Calibri, serif;"><span style="font-size: small;">{{__(" the numbers refer to the maps displayed inside the park.")}}</span></span></span></span></span></p>
              </div>
              <div id="Section1" dir="ltr">
              <p align="justify"><span style="color: #1f3864;">{{__("Regular application of the usual hygiene safety rules in swimming pool water is recommended: before diving, take a thorough shower all over the body. Gatherings are prohibited, all water sports must be carried out in compliance with interpersonal distancing.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 3</strong></u> </span><span style="color: #1f3864;">{{__(" - The arrangement of the umbrellas is organized ensuring a minimum or greater surface area of ​​10 square meters per station, with a minimum spacing between the equipment of 1.5 meters compared to the equipment of the adjacent umbrella. The transit corridors are one-way, the stations are numbered as indicated by the signs and reservations are required for both seasonal and daily customers. At the time of booking or accessing the spa park, customers must communicate their data which will be recorded and stored for 14 days, as per the privacy policy set out in the management, in order to retrospectively trace any contacts as a result of infections. Parents, or those on their behalf, will supervise the rules of social distancing of children in all circumstances.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 4</strong></u></span><span style="color: #1f3864;">{{__(" - The reservation of the umbrella place and the payment of the entrance to the park can be done with the APP to be downloaded on mobile phones, tablets, Ipads, computers, etc.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 5</strong></u> {{__(" - In case of rain or bad weather, customers are advised not to crowd towards the exit, but to wait under the umbrella for their evacuation turn which will be indicated by the staff of the thermal park. Please note that in the restaurant / bar areas access is allowed to a number of people equal to the seats and equipped with a mask.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 6</strong></u></span> <span style="color: #1f3864;"> {{__(" - The mixed use of the changing rooms is prohibited, which can only be used after disinfection from the previous customer's exit. The mixed use of linen is also prohibited: the user must access the service equipped with everything needed; if he is out of stock, he can rent and / or buy towels and / or bathrobes from the cloakroom. The use of the towel on deckchairs, sun loungers and seats is mandatory.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("In the locker room, clothing and personal items must be placed inside your bag; bags are available to contain your personal effects.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 7</strong></u></span><span style="color: #1f3864;">{{__(" - In the event that a guest, while staying inside the facility, exhibits fever or respiratory symptoms (dry cough, sore throat, breathing difficulties), he must communicate this to the staff without coming into direct contact. The Company will promptly inform the ASL Prevention Department, except for particularly critical situations in which the 118 intervention will be requested. While waiting for the medical advice, you will have to: equip the client, if not already in possession, of a surgical mask, avoid contact with other people, accompany him to an isolated environment or to the infirmary previously equipped with disinfectant / germicidal wipes for cleaning the surfaces and fabrics, disposable bag for biohazardous waste. The door of the room must be closed; the room must be adequately ventilated. Any delivery of food and drinks or other will be carried out by leaving what is necessary outside the door. Any urgent needs that involve the entry of a person into the same environment must be carried out by a doctor present or by a person in good health using the appropriate personal protective equipment (FFP2 or FFP3 mask, face protection and gloves, protective apron overalls disposable full-length long sleeves). The customer must remove any material used in isolation (paper handkerchiefs, etc.), closing everything in a double bag, which will be disinfected and disposed of together with any infected materials produced during the intervention of the healthcare staff. The latter will evaluate the case and together with the Company's staff will identify all the customer's contacts.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 8</strong></u></span><span style="color: #1f3864;"> {{__(" - All company premises and showers have been sanitized (nebulization of technically certified active ingredients) upon opening and this operation will be repeated based on the risk analysis, while cleaning (removal of visible dirt with water and detergents or enzymatic products) is carried out periodically during the day and when necessary, disinfection (a process capable of eliminating most of the pathogenic microorganisms with the use of specific certified germicidal products) will take place daily. Regular and frequent cleaning and disinfection of common areas such as changing rooms, cabins, showers and toilets is guaranteed. The equipment (deckchairs, chairs, beds, etc.) will be disinfected at each change of person and at the end of each day. Particular attention is paid to the disinfection of surfaces that are touched most frequently such as, for example, handrails, handles, switches.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("In the locker room there are disposable disinfectant / germicidal wipes for cleaning surfaces which, if used, will be disposed of in the appropriate waste bins.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("To access the toilets, use the mask.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 9</strong></u></span> <span style="color: #1f3864;">{{__(" - Customers with feverish symptoms, those who have had contact with people with Covid - 19 in the previous 14 days and those placed in quarantine, are prohibited from entering")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 10</strong></u></span><span style="color: #1f3864;"> {{__(" - The behavioral precautions to be followed in order to reduce the infection are those dictated by WHO on measures of social distancing, hand cleaning and respiratory hygiene, summarized as follows:")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Ensure proper hand hygiene by washing them frequently with hot running water and disinfectant detergents for at least one minute, alternatively disinfectant gel dispensers are installed.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Social distancing of at least 1 meter and mandatory use of masks. In the impossibility of respecting distances and when using common spaces; the masks should always be worn after disinfecting the hands and taking care not to compromise their effectiveness by contaminating them involuntarily.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("The masks must be disposed of in the appropriate containers indicated by signs.")}}</span></p>
              <p align="justify"><span style="color: #1f3864;"><u><strong>ART. 11</strong></u></span><span style="color: #1f3864; font-size:medium">{{__(" - The service manager of the Covid 19 Anti-diffusion plan of the Negombo park: is Mr. MARCO CASTAGNA.")}}</span><span style="color: #1f3864;"><span style="font-size: medium;"> {{__("The service operators of the Covid 19 Anti diffusion plan for the sector: ")}}</span></span> <span style="color: #1f3864;"><span style="font-size: medium;">Cassa Piscine {{__("Mrs.")}} </span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong> CANTARESSI ANTONELLA</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">{{__(", for the swimming pools Mr. ")}}</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong>SCANDIUZZI</strong></span></span> <span style="color: #1f3864;"><span style="font-size: medium;"><strong>BRUNO</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">{{__(", for the Negombo Beach Mr. ")}}</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong>CANCELLO GIUSEPPE, </strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">{{__("for the locker room, the Lady")}}</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong> CAPRIO RAFFAELLA</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">{{__(", for the offices Mrs.")}}</span></span><span style="color: #1f3864;"><span style="font-size: medium;"><strong> RONELLI ADRIANA</strong></span></span><span style="color: #1f3864;"><span style="font-size: medium;">.</span></span></p>
              <p align="justify">&nbsp;</p>
              <p align="center"><span style="color: #1f3864;"><u>{{__("VADEMECUM SANITARY HYGIENIC MEASURES")}}</u></span></p>
              </div>
              <div id="Section2" dir="ltr">
              <p align="justify"><span style="color: #1f3864;">{{__("Wash your hands often")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Avoid contact with people suffering from respiratory infections")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Avoid hugs and handshakes")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Maintain a distance of at least 1 meter")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Sneezing, coughing into a handkerchief or in the crook of the arm and avoiding contact with respiratory secretions")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Avoid mixed use of bottles and glasses")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Do not touch your eyes, nose and mouth with your hands")}}</span></p>
              <p align="justify"><span style="color: #1f3864;">{{__("Avoid gatherings")}}</span></p>
              </div>
              <p align="center">&nbsp;</p>
              <p align="center"><span style="color: #ff0000;">{{__("An extract of these regulations are placed under each umbrella to remember the guidelines.")}}</span></p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
