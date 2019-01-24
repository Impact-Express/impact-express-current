<?php
/*
 * Template Name: Service Level Agreement and Surcharges
 */
get_header(); ?>
    <section id="services" class="services">

        <div class="container" style="text-align: left;">
            <div class="service-image">
                <img src="<?= get_field('hero_image')['url']; ?>" alt="<?= get_field('hero_image')['alt']; ?>">
            </div>
            <!-- Breadcrumbs -->
            <div class="container" style="text-align: left;">
                You are here:
                <a href="/">Home</a> >
                <!--suppress XmlUnboundNsPrefix -->
                <ul class="breadcrumbs">
                    <li>
                        <a href='/information'>Information</a> >
                    </li>
                    <!--suppress XmlUnboundNsPrefix -->
                    <li>
                        Service Level Agreement and Surcharges
                    </li>
                </ul>
            </div>
            <br>
            <div class="level-content">
                <h2>SERVICE LEVEL AGREEMENT AND SHIPMENT SURCHARGE INFORMATION – EFFECTIVE 1ST JAN 2019</h2>
                <div class="panel-group" id="accordion">

                    <!-- Optional Services Panel -->
                    <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#OptionServices">
                                    Optional Services
                                </a>
                            </h4>
                        </div>
                        <div id="OptionServices" class="panel-collapse collapse">
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#9AMDelivery" aria-controls="9AMDelivery">
                            Special Delivery by 09:00
                            </button>
                            <div id="9AMDelivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Available for delivery to selected postcodes within the Worldwide by 0900 on the next available working day (by 1030 to
                                    USA). Please check the delivery postcode before booking at dct.dhl.com
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: Tariff + £20.00
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Pre12Delivery" aria-controls="Pre12Delivery">
                                Special Delivery by 12:00
                            </button>
                            <div id="Pre12Delivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Available for delivery to selected postcodes within the Worldwide by 1200 on the next available working day. Please
                                    check the delivery postcode before booking at dct.dhl.com
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: Tariff + £10.00
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#SatDelivery" aria-controls="SatDelivery">
                                Saturday Delivery
                            </button>
                            <div id="SatDelivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The delivery of a shipment on a Saturday, when Saturday is not a standard working day, or on a Friday, when Friday is
                                    not a standard working day. This service is only available in selected postal / zip code areas. Please check the delivery
                                    postcode before booking at dct.dhl.com
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £45.00
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Insurance" aria-controls="Insurance">
                                Shipment Insurance - Charged by Shipment Value
                            </button>
                            <div id="Insurance" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The provision, at individual shipment level, of declared value coverage above Standard Liability for the amount
                                    necessary to repair or replace a shipment in the event of physical loss or damage
                                </div>
                                <div class="panel-footer text-info">
                                    Percentage of replacement / declared value with : £18.00 or 3% of stated shipment value if higher.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/-->


                    <!-- Surcharges Panel -->
                    <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#SurchargeCollapse">
                                    Surcharges
                                </a>
                            </h4>
                        </div>
                    <div id="SurchargeCollapse" class="panel-collapse collapse">
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#FuelSurcharge" aria-controls="FuelSurcharge">
                                Fuel Surcharge
                            </button>
                            <div id="FuelSurcharge" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A variable percentage surcharge, derived from a publicly available jet fuel index or diesel fuel index, which is applied to
                                    the weight charge, Service Premiums and all Surcharges and Optional Service charges.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: Calculated Monthly and posted at <a href="https://impactexpress.co.uk/information/monthly-fuel-surcharge/">impactexpress.co.uk/information/monthly-fuel-surcharge/</a>
                                </div>
                            </div>
                        <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#RemoteDelivery" aria-controls="RemoteDelivery">
                                Remote Area Delivery
                        </button>
                            <div id="RemoteDelivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    An international remote area delivery or collection is defined by a post code (or town in the absence of post code) that is
                                    determined as dif cult to serve or too distant. Applies to the destination address for exports, the origin address for
                                    imports and both the origin and destination addresses for Third Country shipments. To check if Remote Area Service
                                    applies to a post code or town name, please visit the Capability Tool (DCT) at dct.dhl.com
                                </div>
                                <div class="panel-footer text-info">
                                    Weight (Amount Per Kg), Min Amount Per Shipment: £0.38 per kg, subject to a minimum charge of £19.00 per shipment.
                                </div>
                            </div>
                        <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DataEntry" aria-controls="DataEntry">
                                Data Entry
                        </button>
                            <div id="DataEntry" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A surcharge applies for each shipment consigned with non-electronic, paper based manual house waybills not entered
                                    onto our online booking facility/with a pre alert manifest sent prior to shipment arrival or without EDI transmitted
                                    information being receieved prior to arrival. Login information is available on request.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £2.00
                                </div>
                            </div>
                        <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Insurance2" aria-controls="Insurance2">
                            Shipment Insurance - Charged by Shipment Value
                        </button>
                        <div id="Insurance2" class="panel-collapse collapse">
                            <div class="panel-body">
                                The provision, at individual shipment level, of declared value coverage above Standard Liability for the amount
                                necessary to repair or replace a shipment in the event of physical loss or damage
                            </div>
                            <div class="panel-footer text-info">
                                Percentage of replacement / declared value with : £18.00 or 3% of stated shipment value if higher.
                            </div>
                        </div>
                        </div>
                    </div>
                    <!--/-->


                    <!-- Additional Handling Panel -->
                    <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#HandlingCollapse">
                                   Additional Handling
                                </a>
                            </h4>
                        </div>
                        <div id="HandlingCollapse" class="panel-collapse collapse">

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Oversize" aria-controls="Oversize">
                                Oversize Piece Surcharge
                            </button>
                            <div id="Oversize" class="panel-collapse collapse">
                                <div class="panel-body">
                                    This fixed surcharge applies to every piece, including a pallet, that exceeds the scale weight of 70kg or with a single
                                    dimension in excess of 120cm. The Oversize Piece surcharge applies to domestic and international shipments.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Piece: £70.00
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#NonStackablePallet" aria-controls="NonStackablePallet">
                                Non Stackable Pallet Surcharge
                            </button>
                            <div id="NonStackablePallet" class="panel-collapse collapse">
                                <div class="panel-body">
                                    This fixed surcharge is applied to every pallet within a shipment that cannot be stacked, either on request by the
                                    shipper, or because of its shape, content or packaging. This surcharge applies to domestic and international shipments.
                                </div>
                                <div class="panel-footer text-info">
                                   Price Per Piece: £130.00
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/-->


                    <!-- DG Surcharges Panel -->
                    <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#DGCollapse">
                                    Dangerous Goods Surcharges --- Please check with dg@impactexpress.co.uk prior to booking
                                </a>
                            </h4>
                        </div>
                        <div id="DGCollapse" class="panel-collapse collapse">
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#FullDG" aria-controls="FullDG">
                                Full Dangerous Goods
                            </button>
                            <div id="FullDG" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The handling and transportation of substances and commodities classified as Full Dangerous Goods either on our
                                    suppliers air or road network or on commercial airlines. Comprises Full IATA Dangerous Goods to the limits of ADR
                                    (Accord Dangerous Routier) Limited Quantities (LQ).
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £85.00
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteries-4" aria-controls="LithiumBatteries-4">
                               Lithium Batteries --- Up to 4 items per Consignment
                            </button>
                            <div id="LithiumBatteries-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You may send a maximum of 4 items containing a battery per consignment, each item containing a battery and must be
                                    contained within the item (phone/Laptop)they are intended to power and packed in the original box. Maximum of 2
                                    boxes per consignment each containing 2 x seperately boxed items containing lithium batteries allowed. Please check
                                    with dg@impactexpress.co.uk to confirm packing instructions and country regulations prior to booking.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: Standard Tariff
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteries4plus" aria-controls="LithiumBatteries4plus">
                                Lithium Batteries --- More than 4 items per Consignment
                            </button>
                            <div id="LithiumBatteries4plus" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You may send more than 4 items containing a battery but they must still be contained within the item
                                    (phone/Laptop)they are intended to power and packed in the original box. They can be packed all within one or more
                                    box per consignment. Please check with dg@impactexpress.co.uk to confirm packing instructions and country
                                    regulations prior to booking.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £20.00
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteriesSecII" aria-controls="LithiumBatteriesSecII">
                                Lithium Batteries --- IATA Section II (PI967, 969, 970)
                            </button>
                            <div id="LithiumBatteriesSecII" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The handling and transportation of shipments containing Lithium Ion or Lithium Metal batteries compliant with the
                                    appropriate IATA Packing instructions (PI966 or 969) either on our suppliers air or road networks or on commerical
                                    airlines.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £20.00
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteriesSec1BII" aria-controls="LithiumBatteriesSec1BII">
                                Lithium Batteries --- IATA Section 1B, II (PI965, PI968)
                            </button>
                            <div id="LithiumBatteriesSec1BII" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The handling and transportation of shipments containing loose Lithium Ion Batteries compliant with the appropriate
                                    IATA Packing Instructions (PI965) on the DHL air network.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £85.00
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DGinEQ" aria-controls="DGinEQ">
                                Dangerous Goods in Excepted Quantities
                            </button>
                            <div id="DGinEQ" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The handling and transportation of substances and commodities classified as Excepted Quantities in accordance with the
                                    IATA Dangerous Goods Regulations (DGR) and permitted on passenger aircrafts or in accordance with ADR (Accord Dangerous Routier) when transported by road.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £10.00
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DGLimitedQuantities" aria-controls="DGLimitedQuantities">
                                Dangerous Goods in Limited Quantities By Road
                            </button>
                            <div id="DGLimitedQuantities" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The ground handling and transportation of substances and commodities classified as Limited Quantities to the limits of
                                    ADR (Accord Dangerous Routier) that are prohibited for air transportation.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £32.00
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DryIce" aria-controls="DryIce">
                                Dry Ice UN1845
                            </button>
                            <div id="DryIce" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The provision, handling and transportation of Dry Ice (UN1845) used as a cooling agent for non-dangerous goods on
                                    either the DHL air or road network or on commercial airlines. Can include replenishment during transit.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £16.00
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/-->


                    <!-- Security Charges Panel -->
                    <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                   Security Charges
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#RestrictedDest" aria-controls="RestrictedDest">
                               <span class="pull-left label label-primary">NEW</span> Restricted Destination Surcharge
                            </button>
                            <div id="RestrictedDest" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Covers the exceptional handling required to service destinations that are subject to trade restrictions imposed by the
                                    United Nations Security Council. The charge aplies to outbound non document shipments to Central Africa, Ivory Coast,
                                    Dem Rep of Congo, Eritrea, Iran, Iraq, North Korea, Libya, Somalia, South Sudan*, Syria* and Yemen.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £22.00*<br>
                                    * Both Charges will apply Per Shipment.
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#ElevatedRisk" aria-controls="ElevatedRisk">
                                <span class="pull-left label label-primary">NEW</span> Elevated Risk Surcharge
                            </button>
                            <div id="ElevatedRisk" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Covers additional security measures for handling outbound and inboud shipments in countries that are in continuos
                                    threat of war, civil unrest or threats of terrorism. The charge is currently in place for outbound, inbound and 3rd country
                                    shipments for Afghanistan*, Burundi, Iraq*, Libya, Syria*, Mali, Niger and Yemen.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £15.00*<br>
                                    * Both Charges will apply Per Shipment.
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#ExporterValidation" aria-controls="ExporterValidation">
                                <span class="pull-left label label-primary">NEW</span> Exporter Validation Surcharge
                            </button>
                            <div id="ExporterValidation" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Exporter valdation surcharges apply when shipping to a country that is subject to trade restrictions Per shipment £22.00*
                                    imposed by anational legislation such as the EEAS or OFAC. The charge is for outbound non-docs only to *Both charges will apply per shipment
                                    Afghanistan*, South Sudan, Belarus, Myanmar, Zimbabwe and Lebanon.
                                </div>
                                <div class="panel-footer text-info">
                                    Price Per Shipment: £22.00*<br>
                                    * Both Charges will apply Per Shipment.
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/-->


                </div>

                <br><br>

               <a class="btn panel-surcharge-dropdown-parent btn-default" href="https://impactexpress.co.uk/wp-content/uploads/2019/01/SLA-Surcharges-Information-2019.pdf">
                                View the Full Copy of the Surcharge Information Here. <i class=" pull-right fa fa-chevron-right"></i>
               </a>
                <br><br>
            </div>
        </div>
</section>
<?php get_footer(); ?>