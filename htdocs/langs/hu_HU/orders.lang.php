<?php
/* Copyright (C) 2012-2013	Regis Houssin	<regis.houssin@capnetworks.com>
 * Copyright (C) 2012-2013	Herve Prot		<herve.prot@symeos.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$orders = array(
		'CHARSET' => 'UTF-8',
		'OrdersArea' => 'Az ügyfelek megrendelések területén',
		'SuppliersOrdersArea' => 'Beszállítók megrendelések területén',
		'OrderCard' => 'Megrendelőlap',
		'OrderId' => 'Order Id',
		'Order' => 'Megrendelés',
		'Orders' => 'Megrendelés',
		'OrderLine' => 'Rendelés vonal',
		'OrderLines' => 'Order lines',
		'OrderFollow' => 'Nyomon követés',
		'OrderDate' => 'Rendezés dátum',
		'OrderToProcess' => 'Feldolgozása érdekében',
		'NewOrder' => 'Új megbízás',
		'ToOrder' => 'Rendet csinálni',
		'MakeOrder' => 'Rendet csinálni',
		'SupplierOrder' => 'Szállító érdekében',
		'SuppliersOrders' => 'Szállítói megrendelések',
		'SuppliersOrdersRunning' => 'Jelenlegi szállító megrendelések',
		'CustomerOrder' => 'Az ügyfelek érdekében',
		'CustomersOrders' => 'Ügyfél megbízások',
		'CustomersOrdersRunning' => 'Jelenlegi ügyfél megrendelések',
		'CustomersOrdersAndOrdersLines' => 'Vevői megrendelések és megrendelés vonalak',
		'OrdersToValid' => 'Ügyfél megbízások, hogy érvényesítse',
		'OrdersToBill' => 'Ügyfél megbízások számla',
		'OrdersInProcess' => 'Ügyfél megbízások folyamatban',
		'OrdersToProcess' => 'Ügyfél megbízások feldolgozása',
		'SuppliersOrdersToProcess' => 'Szállító megrendelések feldolgozása',
		'StatusOrderCanceledShort' => 'Törölve',
		'StatusOrderDraftShort' => 'Tervezet',
		'StatusOrderValidatedShort' => 'Hitelesítette',
		'StatusOrderSentShort' => 'A folyamat',
		'StatusOrderSent' => 'Shipment in process',
		'StatusOrderOnProcessShort' => 'Recepció',
		'StatusOrderProcessedShort' => 'Feldolgozott',
		'StatusOrderToBillShort' => 'Bill',
		'StatusOrderToBill2Short' => 'To bill',
		'StatusOrderApprovedShort' => 'Jóváhagyott',
		'StatusOrderRefusedShort' => 'Megtagadta',
		'StatusOrderToProcessShort' => 'Feldolgozásához',
		'StatusOrderReceivedPartiallyShort' => 'Részben kapott',
		'StatusOrderReceivedAllShort' => 'Minden beérkezett',
		'StatusOrderCanceled' => 'Törölve',
		'StatusOrderDraft' => 'Tervezet (kell érvényesíteni)',
		'StatusOrderNeedQuotes' => 'Draft (needs manual quotes)',
		'StatusOrderNew' => 'New order (needs to be validated)',
		'StatusOrderProcessing' => 'Processing',
		'StatusOrderValidated' => 'Hitelesítette',
		'StatusOrderOnProcess' => 'Várakozás kapni',
		'StatusOrderSending' => 'Sending',
		'StatusOrderClosed' => 'Closed (Shipped)',
		'StatusOrderToBill' => 'Bill',
		'StatusOrderToBill2' => 'To bill',
		'StatusOrderApproved' => 'Jóváhagyott',
		'StatusOrderRefused' => 'Megtagadta',
		'StatusOrderError' => 'Error',
		'StatusOrderReceivedPartially' => 'Részben kapott',
		'StatusOrderReceivedAll' => 'Minden beérkezett',
		'ShippingExist' => 'A szállítmány létezik',
		'DraftOrWaitingApproved' => 'Vagy jóváhagyott tervezet még nem rendelhető',
		'DraftOrWaitingShipped' => 'Tervezet még nem hitelesített vagy szállított',
		'MenuOrdersToBill' => 'Megrendelés Bill',
		'MenuOrdersToBill2' => 'Orders to bill',
		'SearchOrder' => 'Keresés érdekében',
		'Sending' => 'Küldése',
		'Sendings' => 'Küldések',
		'ShipProduct' => 'Hajó termék',
		'Discount' => 'Kedvezmény',
		'CreateOrder' => 'Rendet',
		'RefuseOrder' => 'Hulladékgyűjtő érdekében',
		'ApproveOrder' => 'Accept érdekében',
		'ValidateOrder' => 'Érvényesítése érdekében',
		'UnvalidateOrder' => 'Unvalidate érdekében',
		'DeleteOrder' => 'Törlése érdekében',
		'CancelOrder' => 'Mégsem érdekében',
		'AddOrder' => 'Add érdekében',
		'AddToMyOrders' => 'Hozzáadás a megrendelések',
		'AddToOtherOrders' => 'Add az egyéb megrendelések',
		'ShowOrder' => 'Megjelenítése érdekében',
		'NoOpenedOrders' => 'Nem nyitott megrendelések',
		'NoOtherOpenedOrders' => 'Nincs más nyitott megrendelések',
		'OtherOrders' => 'Egyéb megrendelések',
		'LastOrders' => 'Utolsó %s megrendelések',
		'LastModifiedOrders' => 'Utolsó módosítás %s megrendelések',
		'LastClosedOrders' => 'Utolsó lezárt megrendelések %s',
		'AllOrders' => 'Minden rendelés',
		'NbOfOrders' => 'Megrendelések száma',
		'OrdersStatistics' => 'Rend statisztikák',
		'OrdersStatisticsSuppliers' => 'Szállító rend statisztikák',
		'NumberOfOrdersByMonth' => 'Megrendelések száma a hónap',
		'AmountOfOrdersByMonthHT' => 'mennyiségű megrendelések havonta (adózott)',
		'ListOfOrders' => 'Megrendelések listája',
		'CloseOrder' => 'Bezárása érdekében',
		'ConfirmCloseOrder' => 'Biztosan be akarja zárni ezt a sorrendet? Ha a megrendelés zárva van, csak akkor lehet számlázni.',
		'ConfirmCloseOrderIfSending' => 'Biztosan be akarja zárni ezt a sorrendet? Meg kell zárni a megrendelés csak az összes szállítási kész.',
		'ConfirmDeleteOrder' => 'Biztos benne, hogy törölni kívánja a megrendelést?',
		'ConfirmValidateOrder' => 'Biztosan meg akarja érvényesíteni ezt a sorrendet néven <b>%s?</b>',
		'ConfirmUnvalidateOrder' => 'Biztos vagy benne, hogy helyreállítsa a rendet <b>%s</b> a vázlat?',
		'ConfirmCancelOrder' => 'Biztosan meg akarja szakítani ezt a sorrendet?',
		'ConfirmMakeOrder' => 'Biztos vagy benne, hogy megerősítse annak érdekében tették ezt a <b>%s?</b>',
		'GenerateBill' => 'Számla generálása',
		'ClassifyShipped' => 'Classify delivered',
		'ClassifyBilled' => 'Classify &quot;számlázott&quot;',
		'ComptaCard' => 'Számviteli kártya',
		'DraftOrders' => 'Tervezet megrendelések',
		'RelatedOrders' => 'Kapcsolódó megrendelések',
		'OnProcessOrders' => 'A folyamat sorrendek',
		'RefOrder' => 'Ref. érdekében',
		'RefCustomerOrder' => 'Ref. az ügyfelek érdekében',
		'CustomerOrder' => 'Az ügyfelek érdekében',
		'RefCustomerOrderShort' => 'Ref. Cust. érdekében',
		'SendOrderByMail' => 'A megrendelés elküldése levélben',
		'ActionsOnOrder' => 'Események megrendelésre',
		'NoArticleOfTypeProduct' => 'Nem cikke típusú &quot;termék&quot;, így nem szállítható cikket ebben a sorrendben',
		'OrderMode' => 'Megrendelés módja',
		'AuthorRequest' => 'Kérés szerző',
		'UseCustomerContactAsOrderRecipientIfExist' => 'Használja ügyfélkapcsolati címet, ha meghatározott harmadik személy helyett a címet annak címzett címét',
		'RunningOrders' => 'Megrendelés a folyamat',
		'UserWithApproveOrderGrant' => 'Felhasználók biztosították &quot;megrendelések jóváhagyása&quot; jogosultság.',
		'PaymentOrderRef' => 'Kifizetése érdekében %s',
		'CloneOrder' => 'Clone érdekében',
		'ConfirmCloneOrder' => 'Biztos vagy benne, hogy ezt a sorrendet <b>%s</b> klónozni?',
		'DispatchSupplierOrder' => 'Fogadása érdekében szállító %s',
		'DateDeliveryPlanned' => 'Date de livraison prévue',
		'SetDemandReason' => 'Définir l\'origine de la commande',
		////////// Types de contacts //////////
		'TypeContact_commande_internal_SALESREPFOLL' => 'Reprezentatív nyomon követése az ügyfelek érdekében',
		'TypeContact_commande_internal_SHIPPING' => 'Képviselő-up a következő hajózási',
		'TypeContact_commande_external_BILLING' => 'Ügyfél számla Kapcsolat',
		'TypeContact_commande_external_SHIPPING' => 'Megrendelő szállítási kapcsolattartó',
		'TypeContact_commande_external_CUSTOMER' => 'Ügyfélkapcsolati nyomon követése érdekében',
		'TypeContact_order_supplier_internal_SALESREPFOLL' => 'Reprezentatív nyomon követése érdekében beszállító',
		'TypeContact_order_supplier_internal_SHIPPING' => 'Képviselő-up a következő hajózási',
		'TypeContact_order_supplier_external_BILLING' => 'Szállító számlát Kapcsolat',
		'TypeContact_order_supplier_external_SHIPPING' => 'Szállító szállítási kapcsolat',
		'TypeContact_order_supplier_external_CUSTOMER' => 'Szállító érintkezés nyomon követése érdekében',
		'Error_COMMANDE_SUPPLIER_ADDON_NotDefined' => 'Állandó COMMANDE_SUPPLIER_ADDON nincs definiálva',
		'Error_COMMANDE_ADDON_NotDefined' => 'Állandó COMMANDE_ADDON nincs definiálva',
		'Error_FailedToLoad_COMMANDE_SUPPLIER_ADDON_File' => 'Nem sikerült betölteni a modul fájlt &quot;%s&quot;',
		'Error_FailedToLoad_COMMANDE_ADDON_File' => 'Nem sikerült betölteni a modul fájlt &quot;%s&quot;',
		'Error_OrderNotChecked' => 'No orders to invoice selected',
		// Sources
		'OrderSource0' => 'Üzleti ajánlat',
		'OrderSource1' => 'Internet',
		'OrderSource2' => 'Mail kampány',
		'OrderSource3' => 'Telefon compaign',
		'OrderSource4' => 'Fax kampány',
		'OrderSource5' => 'Kereskedelmi',
		'OrderSource6' => 'Tárolja',
		'QtyOrdered' => 'Mennyiség megrendelt',
		'AddDeliveryCostLine' => 'Add a szállítási költség vonal jelzi a súlya a sorrendben',
		// Documents models
		'PDFEinsteinDescription' => 'A teljes order (logo. ..)',
		'PDFEdisonDescription' => 'Egy egyszerű modell érdekében',
		// Orders modes
		'OrderByMail' => 'Mail',
		'OrderByFax' => 'Fax',
		'OrderByEMail' => 'E-mail',
		'OrderByWWW' => 'Online',
		'OrderByPhone' => 'Telefon',
		'CreateInvoiceForThisCustomer' => 'Bill orders',
		'NoOrdersToInvoice' => 'No orders billable',
		'CloseProcessedOrdersAutomatically' => 'Classify "Processed" all selected orders.',
		'MenuOrdersToBill2' => 'Orders to bill',
		'LinkedInvoices' => 'Linked invoices',
		'LinkedProposals' => 'Linked proposals',
		'ShippingHT' => 'Shipping cost'
);
?>