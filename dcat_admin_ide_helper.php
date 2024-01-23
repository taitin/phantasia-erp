<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection remain
     * @property Grid\Column|Collection comment
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection keywords
     * @property Grid\Column|Collection og_image
     * @property Grid\Column|Collection secs
     * @property Grid\Column|Collection footers
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection start
     * @property Grid\Column|Collection end
     * @property Grid\Column|Collection wait
     * @property Grid\Column|Collection iframe
     * @property Grid\Column|Collection iframe_height
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection logo
     * @property Grid\Column|Collection home_page
     * @property Grid\Column|Collection zip_url
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection permission
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection summary
     * @property Grid\Column|Collection income
     * @property Grid\Column|Collection pay
     * @property Grid\Column|Collection account_id
     * @property Grid\Column|Collection ledger_id
     * @property Grid\Column|Collection timestamp
     * @property Grid\Column|Collection is_attach
     * @property Grid\Column|Collection admin_user_id
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection invoice
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection balance
     * @property Grid\Column|Collection subpoea_id
     * @property Grid\Column|Collection subpoean_id
     * @property Grid\Column|Collection subpoena_id
     * @property Grid\Column|Collection due_date
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection account
     * @property Grid\Column|Collection pw
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection shopID
     * @property Grid\Column|Collection depName
     * @property Grid\Column|Collection productID
     * @property Grid\Column|Collection year
     * @property Grid\Column|Collection month
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection avgCost
     * @property Grid\Column|Collection totalCost
     * @property Grid\Column|Collection mainID
     * @property Grid\Column|Collection lockKey
     * @property Grid\Column|Collection day
     * @property Grid\Column|Collection checkID
     * @property Grid\Column|Collection handle
     * @property Grid\Column|Collection result
     * @property Grid\Column|Collection O_amount
     * @property Grid\Column|Collection O_totalCost
     * @property Grid\Column|Collection P_amount
     * @property Grid\Column|Collection P_totalCost
     * @property Grid\Column|Collection move
     * @property Grid\Column|Collection S_amount
     * @property Grid\Column|Collection S_totalSellPrice
     * @property Grid\Column|Collection S_avgPrice
     * @property Grid\Column|Collection S_totalCost
     * @property Grid\Column|Collection E_amount
     * @property Grid\Column|Collection E_totalCost
     * @property Grid\Column|Collection consignment
     * @property Grid\Column|Collection close
     * @property Grid\Column|Collection toShopID
     * @property Grid\Column|Collection CSS_totalCost
     * @property Grid\Column|Collection CSS_totalSellPrice
     * @property Grid\Column|Collection O_profit
     * @property Grid\Column|Collection All_profit
     * @property Grid\Column|Collection CSS_profit
     * @property Grid\Column|Collection OHS_totalSellPrice
     * @property Grid\Column|Collection OHS_profit
     * @property Grid\Column|Collection announceID
     * @property Grid\Column|Collection autoBtn
     * @property Grid\Column|Collection time
     * @property Grid\Column|Collection source
     * @property Grid\Column|Collection confirm
     * @property Grid\Column|Collection announceTime
     * @property Grid\Column|Collection acceptTime
     * @property Grid\Column|Collection IDNumber
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection bankAccount
     * @property Grid\Column|Collection bankCode
     * @property Grid\Column|Collection bfID
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection memberID
     * @property Grid\Column|Collection total
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection reason
     * @property Grid\Column|Collection useBonus
     * @property Grid\Column|Collection purchasePrice
     * @property Grid\Column|Collection changeID
     * @property Grid\Column|Collection cost
     * @property Grid\Column|Collection function
     * @property Grid\Column|Collection inTime
     * @property Grid\Column|Collection finTime
     * @property Grid\Column|Collection reportTime
     * @property Grid\Column|Collection reporter
     * @property Grid\Column|Collection operation
     * @property Grid\Column|Collection expected
     * @property Grid\Column|Collection fixtime
     * @property Grid\Column|Collection CSID
     * @property Grid\Column|Collection CSsize
     * @property Grid\Column|Collection timeStamp
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection MIN
     * @property Grid\Column|Collection MOUT
     * @property Grid\Column|Collection credit
     * @property Grid\Column|Collection note
     * @property Grid\Column|Collection aid
     * @property Grid\Column|Collection cashType
     * @property Grid\Column|Collection outputItem
     * @property Grid\Column|Collection rank
     * @property Grid\Column|Collection creditType
     * @property Grid\Column|Collection checkIN
     * @property Grid\Column|Collection checkOut
     * @property Grid\Column|Collection people
     * @property Grid\Column|Collection checkWay
     * @property Grid\Column|Collection target
     * @property Grid\Column|Collection joinComment
     * @property Grid\Column|Collection outComment
     * @property Grid\Column|Collection deadline
     * @property Grid\Column|Collection deadTime
     * @property Grid\Column|Collection collectID
     * @property Grid\Column|Collection lowNum
     * @property Grid\Column|Collection deletetoken
     * @property Grid\Column|Collection realNum
     * @property Grid\Column|Collection shipmentID
     * @property Grid\Column|Collection backID
     * @property Grid\Column|Collection sellNum
     * @property Grid\Column|Collection nowNum
     * @property Grid\Column|Collection consignmentNum
     * @property Grid\Column|Collection ok
     * @property Grid\Column|Collection latitude
     * @property Grid\Column|Collection longitude
     * @property Grid\Column|Collection csOrderID
     * @property Grid\Column|Collection csOrderNum
     * @property Grid\Column|Collection orderTime
     * @property Grid\Column|Collection usage
     * @property Grid\Column|Collection cargoStatus
     * @property Grid\Column|Collection cashStatus
     * @property Grid\Column|Collection cargoTime
     * @property Grid\Column|Collection cashInTime
     * @property Grid\Column|Collection discount
     * @property Grid\Column|Collection outDate
     * @property Grid\Column|Collection deleteToken
     * @property Grid\Column|Collection deleteName
     * @property Grid\Column|Collection emailNotify
     * @property Grid\Column|Collection phoneNotify
     * @property Grid\Column|Collection sellPrice
     * @property Grid\Column|Collection shipWay
     * @property Grid\Column|Collection backNum
     * @property Grid\Column|Collection display
     * @property Grid\Column|Collection ECID
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection platformID
     * @property Grid\Column|Collection ECOrderNum
     * @property Grid\Column|Collection ECstatus
     * @property Grid\Column|Collection orderID
     * @property Grid\Column|Collection updateTime
     * @property Grid\Column|Collection transportID
     * @property Grid\Column|Collection trackingNumber
     * @property Grid\Column|Collection invoiceID
     * @property Grid\Column|Collection charge
     * @property Grid\Column|Collection receiverName
     * @property Grid\Column|Collection receiverPhone
     * @property Grid\Column|Collection receiverAddress
     * @property Grid\Column|Collection payway
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection comID
     * @property Grid\Column|Collection CarrierType
     * @property Grid\Column|Collection CarrierId1
     * @property Grid\Column|Collection NPOBAN
     * @property Grid\Column|Collection boxTime
     * @property Grid\Column|Collection finishTime
     * @property Grid\Column|Collection boxNum
     * @property Grid\Column|Collection sendingTime
     * @property Grid\Column|Collection platFormID
     * @property Grid\Column|Collection platformName
     * @property Grid\Column|Collection period
     * @property Grid\Column|Collection InvoiceNum
     * @property Grid\Column|Collection InoviceDateTime
     * @property Grid\Column|Collection InvoiceCode
     * @property Grid\Column|Collection InvoiceNumber
     * @property Grid\Column|Collection RandomNumber
     * @property Grid\Column|Collection BuyerIdentifier
     * @property Grid\Column|Collection SellerIdentifier
     * @property Grid\Column|Collection shopName
     * @property Grid\Column|Collection orderNum
     * @property Grid\Column|Collection DonateMark
     * @property Grid\Column|Collection CarrierId2
     * @property Grid\Column|Collection PrintMark
     * @property Grid\Column|Collection depID
     * @property Grid\Column|Collection productDetail
     * @property Grid\Column|Collection invoiceType
     * @property Grid\Column|Collection xmlout
     * @property Grid\Column|Collection xmlOutTime
     * @property Grid\Column|Collection invalid
     * @property Grid\Column|Collection void
     * @property Grid\Column|Collection AllowanceNumber
     * @property Grid\Column|Collection AllowanceDateTime
     * @property Grid\Column|Collection BuyerName
     * @property Grid\Column|Collection BuyerAddress
     * @property Grid\Column|Collection BuyerPersonInCharge
     * @property Grid\Column|Collection BuyerTelephoneNumber
     * @property Grid\Column|Collection BuyerFacsimileNumber
     * @property Grid\Column|Collection BuyerEmailAddress
     * @property Grid\Column|Collection BuyerCustomerNumber
     * @property Grid\Column|Collection BuyerRoleRemark
     * @property Grid\Column|Collection SellerName
     * @property Grid\Column|Collection SellerAddress
     * @property Grid\Column|Collection SellerPersonInCharge
     * @property Grid\Column|Collection SellerTelephoneNumber
     * @property Grid\Column|Collection SellerFacsimileNumber
     * @property Grid\Column|Collection SellerEmailAddress
     * @property Grid\Column|Collection SellerCustomerNumber
     * @property Grid\Column|Collection SellerRoleRemark
     * @property Grid\Column|Collection Attachment
     * @property Grid\Column|Collection TaxAmount
     * @property Grid\Column|Collection TotalAmount
     * @property Grid\Column|Collection xmlOut
     * @property Grid\Column|Collection CancelDateTime
     * @property Grid\Column|Collection CancelReason
     * @property Grid\Column|Collection Remark
     * @property Grid\Column|Collection InvoiceDateTime
     * @property Grid\Column|Collection ReturnTaxDocumentNumber
     * @property Grid\Column|Collection ReceiveDateTime
     * @property Grid\Column|Collection BuyerRemark
     * @property Grid\Column|Collection timeChanger
     * @property Grid\Column|Collection RejectInvoiceNumber
     * @property Grid\Column|Collection RejectDateTime
     * @property Grid\Column|Collection RejectReason
     * @property Grid\Column|Collection YearMonth
     * @property Grid\Column|Collection InvoiceTrack
     * @property Grid\Column|Collection InvoiceBeginNo
     * @property Grid\Column|Collection InvoiceEndNo
     * @property Grid\Column|Collection InvoiceNext
     * @property Grid\Column|Collection VoidDateTime
     * @property Grid\Column|Collection VoidReason
     * @property Grid\Column|Collection sending
     * @property Grid\Column|Collection memo
     * @property Grid\Column|Collection subject
     * @property Grid\Column|Collection signature
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection fromAge
     * @property Grid\Column|Collection toAge
     * @property Grid\Column|Collection sendTime
     * @property Grid\Column|Collection headers
     * @property Grid\Column|Collection emailList
     * @property Grid\Column|Collection functionID
     * @property Grid\Column|Collection accountID
     * @property Grid\Column|Collection eID
     * @property Grid\Column|Collection priority
     * @property Grid\Column|Collection err
     * @property Grid\Column|Collection receiverNum
     * @property Grid\Column|Collection point
     * @property Grid\Column|Collection msg
     * @property Grid\Column|Collection data
     * @property Grid\Column|Collection rentID
     * @property Grid\Column|Collection times
     * @property Grid\Column|Collection termID
     * @property Grid\Column|Collection mainNum
     * @property Grid\Column|Collection IP
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection runTime
     * @property Grid\Column|Collection purchaseID
     * @property Grid\Column|Collection core
     * @property Grid\Column|Collection six
     * @property Grid\Column|Collection from
     * @property Grid\Column|Collection to
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection check_shopID
     * @property Grid\Column|Collection checked_at
     * @property Grid\Column|Collection checked
     * @property Grid\Column|Collection blackcont
     * @property Grid\Column|Collection blackToken
     * @property Grid\Column|Collection bonusStatus
     * @property Grid\Column|Collection consumStatus
     * @property Grid\Column|Collection levelID
     * @property Grid\Column|Collection levelName
     * @property Grid\Column|Collection barcode
     * @property Grid\Column|Collection bonus
     * @property Grid\Column|Collection rentLimit
     * @property Grid\Column|Collection consumption
     * @property Grid\Column|Collection msgID
     * @property Grid\Column|Collection fromShopID
     * @property Grid\Column|Collection fromAccount
     * @property Grid\Column|Collection fromAid
     * @property Grid\Column|Collection toAid
     * @property Grid\Column|Collection toAccount
     * @property Grid\Column|Collection createTime
     * @property Grid\Column|Collection buyNum
     * @property Grid\Column|Collection isConsignment
     * @property Grid\Column|Collection applyDelete
     * @property Grid\Column|Collection shippingDate
     * @property Grid\Column|Collection rowID
     * @property Grid\Column|Collection addressID
     * @property Grid\Column|Collection eachCost
     * @property Grid\Column|Collection sProductID
     * @property Grid\Column|Collection payType
     * @property Grid\Column|Collection sellID
     * @property Grid\Column|Collection isOnline
     * @property Grid\Column|Collection awardToken
     * @property Grid\Column|Collection profit
     * @property Grid\Column|Collection isNew
     * @property Grid\Column|Collection diff
     * @property Grid\Column|Collection finalTotal
     * @property Grid\Column|Collection fee
     * @property Grid\Column|Collection webPay
     * @property Grid\Column|Collection creditFee
     * @property Grid\Column|Collection subTotal
     * @property Grid\Column|Collection shippingTime
     * @property Grid\Column|Collection orderComment
     * @property Grid\Column|Collection makeInvoice
     * @property Grid\Column|Collection receiver
     * @property Grid\Column|Collection defaultToken
     * @property Grid\Column|Collection destinationShopID
     * @property Grid\Column|Collection shippingFee
     * @property Grid\Column|Collection adjustWay
     * @property Grid\Column|Collection adjustToken
     * @property Grid\Column|Collection adjustFlag
     * @property Grid\Column|Collection adjustID
     * @property Grid\Column|Collection requestTime
     * @property Grid\Column|Collection backTime
     * @property Grid\Column|Collection backToken
     * @property Grid\Column|Collection backFlag
     * @property Grid\Column|Collection receiverTime
     * @property Grid\Column|Collection distributeName
     * @property Grid\Column|Collection upDiscount
     * @property Grid\Column|Collection yearmonth
     * @property Grid\Column|Collection distributeType
     * @property Grid\Column|Collection shipmentCode
     * @property Grid\Column|Collection shippingNum
     * @property Grid\Column|Collection shipmentComment
     * @property Grid\Column|Collection arriveTime
     * @property Grid\Column|Collection shipmentFee
     * @property Grid\Column|Collection invoiceDetail
     * @property Grid\Column|Collection hidePrice
     * @property Grid\Column|Collection assignDate
     * @property Grid\Column|Collection assignT
     * @property Grid\Column|Collection tcgTotal
     * @property Grid\Column|Collection sendKY
     * @property Grid\Column|Collection money
     * @property Grid\Column|Collection bsetDiscount
     * @property Grid\Column|Collection best30
     * @property Grid\Column|Collection targetStart
     * @property Grid\Column|Collection targetEnd
     * @property Grid\Column|Collection onYear
     * @property Grid\Column|Collection upbonus
     * @property Grid\Column|Collection bonusDiff
     * @property Grid\Column|Collection boxProductID
     * @property Grid\Column|Collection unitProductID
     * @property Grid\Column|Collection unitToBox
     * @property Grid\Column|Collection birthday
     * @property Grid\Column|Collection joinTime
     * @property Grid\Column|Collection myBonus
     * @property Grid\Column|Collection adblock
     * @property Grid\Column|Collection PFID
     * @property Grid\Column|Collection productStr
     * @property Grid\Column|Collection packingNum
     * @property Grid\Column|Collection parentID
     * @property Grid\Column|Collection ZHName
     * @property Grid\Column|Collection ENGName
     * @property Grid\Column|Collection language
     * @property Grid\Column|Collection minDiscount
     * @property Grid\Column|Collection minPeople
     * @property Grid\Column|Collection maxPeople
     * @property Grid\Column|Collection age
     * @property Grid\Column|Collection suppliers
     * @property Grid\Column|Collection category
     * @property Grid\Column|Collection productNum
     * @property Grid\Column|Collection buyPrice
     * @property Grid\Column|Collection buyDiscount
     * @property Grid\Column|Collection openStatus
     * @property Grid\Column|Collection publisher
     * @property Grid\Column|Collection phaBid
     * @property Grid\Column|Collection bidExist
     * @property Grid\Column|Collection cardSleeve
     * @property Grid\Column|Collection flowRate
     * @property Grid\Column|Collection flowNum
     * @property Grid\Column|Collection nonInvoice
     * @property Grid\Column|Collection nonJoinPurchaceDiscount
     * @property Grid\Column|Collection rule
     * @property Grid\Column|Collection limitNum
     * @property Grid\Column|Collection nonBonus
     * @property Grid\Column|Collection case
     * @property Grid\Column|Collection recent
     * @property Grid\Column|Collection cabinet
     * @property Grid\Column|Collection hide
     * @property Grid\Column|Collection sellAmount
     * @property Grid\Column|Collection Sconsignment
     * @property Grid\Column|Collection patch
     * @property Grid\Column|Collection ig
     * @property Grid\Column|Collection igBreak
     * @property Grid\Column|Collection length
     * @property Grid\Column|Collection width
     * @property Grid\Column|Collection height
     * @property Grid\Column|Collection weight
     * @property Grid\Column|Collection orgNum
     * @property Grid\Column|Collection resultNum
     * @property Grid\Column|Collection post
     * @property Grid\Column|Collection pID
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection startConsignment
     * @property Grid\Column|Collection supplierID
     * @property Grid\Column|Collection ky
     * @property Grid\Column|Collection phantasia
     * @property Grid\Column|Collection stockNum
     * @property Grid\Column|Collection checkNum
     * @property Grid\Column|Collection preTime
     * @property Grid\Column|Collection purchaseTotal
     * @property Grid\Column|Collection accountTime
     * @property Grid\Column|Collection shareFee
     * @property Grid\Column|Collection tax
     * @property Grid\Column|Collection typeID
     * @property Grid\Column|Collection typeOrder
     * @property Grid\Column|Collection limitAmount
     * @property Grid\Column|Collection used
     * @property Grid\Column|Collection key
     * @property Grid\Column|Collection val
     * @property Grid\Column|Collection sql
     * @property Grid\Column|Collection rentTime
     * @property Grid\Column|Collection return
     * @property Grid\Column|Collection table
     * @property Grid\Column|Collection dir
     * @property Grid\Column|Collection index
     * @property Grid\Column|Collection userID
     * @property Grid\Column|Collection sanguoshaID
     * @property Grid\Column|Collection delete
     * @property Grid\Column|Collection text
     * @property Grid\Column|Collection dueTime
     * @property Grid\Column|Collection reNew
     * @property Grid\Column|Collection end_at
     * @property Grid\Column|Collection start_at
     * @property Grid\Column|Collection sp_order_id
     * @property Grid\Column|Collection errno
     * @property Grid\Column|Collection correctTime
     * @property Grid\Column|Collection licenceCode
     * @property Grid\Column|Collection dirtyBit
     * @property Grid\Column|Collection lastUpdate
     * @property Grid\Column|Collection buffering
     * @property Grid\Column|Collection offset
     * @property Grid\Column|Collection consignmentStatus
     * @property Grid\Column|Collection shipmentStatus
     * @property Grid\Column|Collection handShake
     * @property Grid\Column|Collection handShakeSign
     * @property Grid\Column|Collection jointype
     * @property Grid\Column|Collection shipOut
     * @property Grid\Column|Collection lastBuffer
     * @property Grid\Column|Collection fireData
     * @property Grid\Column|Collection tableNum
     * @property Grid\Column|Collection holiday
     * @property Grid\Column|Collection showPrice
     * @property Grid\Column|Collection shopLogin
     * @property Grid\Column|Collection contactPerson
     * @property Grid\Column|Collection fax
     * @property Grid\Column|Collection invoiceByShip
     * @property Grid\Column|Collection shipComment
     * @property Grid\Column|Collection assignTime
     * @property Grid\Column|Collection shipInterval
     * @property Grid\Column|Collection percent
     * @property Grid\Column|Collection safeCon
     * @property Grid\Column|Collection stockCon
     * @property Grid\Column|Collection lowerNum
     * @property Grid\Column|Collection autoOrder
     * @property Grid\Column|Collection suitID
     * @property Grid\Column|Collection mainProductID
     * @property Grid\Column|Collection snum
     * @property Grid\Column|Collection invoiceWay
     * @property Grid\Column|Collection contact
     * @property Grid\Column|Collection setting
     * @property Grid\Column|Collection temp
     * @property Grid\Column|Collection keyValue
     * @property Grid\Column|Collection indexValue
     * @property Grid\Column|Collection term
     * @property Grid\Column|Collection creatTime
     * @property Grid\Column|Collection estimateTime
     * @property Grid\Column|Collection startTime
     * @property Grid\Column|Collection endTime
     * @property Grid\Column|Collection top10
     * @property Grid\Column|Collection transportNameID
     * @property Grid\Column|Collection transportName
     * @property Grid\Column|Collection csorderID
     * @property Grid\Column|Collection datatransfer
     * @property Grid\Column|Collection buyID
     * @property Grid\Column|Collection BuyName
     * @property Grid\Column|Collection postNum
     * @property Grid\Column|Collection counntry
     * @property Grid\Column|Collection optionID
     * @property Grid\Column|Collection sendCombine
     * @property Grid\Column|Collection V
     * @property Grid\Column|Collection cool
     * @property Grid\Column|Collection card
     * @property Grid\Column|Collection cat
     * @property Grid\Column|Collection special
     * @property Grid\Column|Collection addressErr
     * @property Grid\Column|Collection transportRemarks
     * @property Grid\Column|Collection packageNumber
     * @property Grid\Column|Collection invoiceNumber
     * @property Grid\Column|Collection sub_code
     * @property Grid\Column|Collection borrow
     * @property Grid\Column|Collection loan
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection remain(string $label = null)
     * @method Grid\Column|Collection comment(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection keywords(string $label = null)
     * @method Grid\Column|Collection og_image(string $label = null)
     * @method Grid\Column|Collection secs(string $label = null)
     * @method Grid\Column|Collection footers(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection start(string $label = null)
     * @method Grid\Column|Collection end(string $label = null)
     * @method Grid\Column|Collection wait(string $label = null)
     * @method Grid\Column|Collection iframe(string $label = null)
     * @method Grid\Column|Collection iframe_height(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection logo(string $label = null)
     * @method Grid\Column|Collection home_page(string $label = null)
     * @method Grid\Column|Collection zip_url(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection permission(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection summary(string $label = null)
     * @method Grid\Column|Collection income(string $label = null)
     * @method Grid\Column|Collection pay(string $label = null)
     * @method Grid\Column|Collection account_id(string $label = null)
     * @method Grid\Column|Collection ledger_id(string $label = null)
     * @method Grid\Column|Collection timestamp(string $label = null)
     * @method Grid\Column|Collection is_attach(string $label = null)
     * @method Grid\Column|Collection admin_user_id(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection invoice(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection balance(string $label = null)
     * @method Grid\Column|Collection subpoea_id(string $label = null)
     * @method Grid\Column|Collection subpoean_id(string $label = null)
     * @method Grid\Column|Collection subpoena_id(string $label = null)
     * @method Grid\Column|Collection due_date(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection account(string $label = null)
     * @method Grid\Column|Collection pw(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection shopID(string $label = null)
     * @method Grid\Column|Collection depName(string $label = null)
     * @method Grid\Column|Collection productID(string $label = null)
     * @method Grid\Column|Collection year(string $label = null)
     * @method Grid\Column|Collection month(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection avgCost(string $label = null)
     * @method Grid\Column|Collection totalCost(string $label = null)
     * @method Grid\Column|Collection mainID(string $label = null)
     * @method Grid\Column|Collection lockKey(string $label = null)
     * @method Grid\Column|Collection day(string $label = null)
     * @method Grid\Column|Collection checkID(string $label = null)
     * @method Grid\Column|Collection handle(string $label = null)
     * @method Grid\Column|Collection result(string $label = null)
     * @method Grid\Column|Collection O_amount(string $label = null)
     * @method Grid\Column|Collection O_totalCost(string $label = null)
     * @method Grid\Column|Collection P_amount(string $label = null)
     * @method Grid\Column|Collection P_totalCost(string $label = null)
     * @method Grid\Column|Collection move(string $label = null)
     * @method Grid\Column|Collection S_amount(string $label = null)
     * @method Grid\Column|Collection S_totalSellPrice(string $label = null)
     * @method Grid\Column|Collection S_avgPrice(string $label = null)
     * @method Grid\Column|Collection S_totalCost(string $label = null)
     * @method Grid\Column|Collection E_amount(string $label = null)
     * @method Grid\Column|Collection E_totalCost(string $label = null)
     * @method Grid\Column|Collection consignment(string $label = null)
     * @method Grid\Column|Collection close(string $label = null)
     * @method Grid\Column|Collection toShopID(string $label = null)
     * @method Grid\Column|Collection CSS_totalCost(string $label = null)
     * @method Grid\Column|Collection CSS_totalSellPrice(string $label = null)
     * @method Grid\Column|Collection O_profit(string $label = null)
     * @method Grid\Column|Collection All_profit(string $label = null)
     * @method Grid\Column|Collection CSS_profit(string $label = null)
     * @method Grid\Column|Collection OHS_totalSellPrice(string $label = null)
     * @method Grid\Column|Collection OHS_profit(string $label = null)
     * @method Grid\Column|Collection announceID(string $label = null)
     * @method Grid\Column|Collection autoBtn(string $label = null)
     * @method Grid\Column|Collection time(string $label = null)
     * @method Grid\Column|Collection source(string $label = null)
     * @method Grid\Column|Collection confirm(string $label = null)
     * @method Grid\Column|Collection announceTime(string $label = null)
     * @method Grid\Column|Collection acceptTime(string $label = null)
     * @method Grid\Column|Collection IDNumber(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection bankAccount(string $label = null)
     * @method Grid\Column|Collection bankCode(string $label = null)
     * @method Grid\Column|Collection bfID(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection memberID(string $label = null)
     * @method Grid\Column|Collection total(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection reason(string $label = null)
     * @method Grid\Column|Collection useBonus(string $label = null)
     * @method Grid\Column|Collection purchasePrice(string $label = null)
     * @method Grid\Column|Collection changeID(string $label = null)
     * @method Grid\Column|Collection cost(string $label = null)
     * @method Grid\Column|Collection function(string $label = null)
     * @method Grid\Column|Collection inTime(string $label = null)
     * @method Grid\Column|Collection finTime(string $label = null)
     * @method Grid\Column|Collection reportTime(string $label = null)
     * @method Grid\Column|Collection reporter(string $label = null)
     * @method Grid\Column|Collection operation(string $label = null)
     * @method Grid\Column|Collection expected(string $label = null)
     * @method Grid\Column|Collection fixtime(string $label = null)
     * @method Grid\Column|Collection CSID(string $label = null)
     * @method Grid\Column|Collection CSsize(string $label = null)
     * @method Grid\Column|Collection timeStamp(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection MIN(string $label = null)
     * @method Grid\Column|Collection MOUT(string $label = null)
     * @method Grid\Column|Collection credit(string $label = null)
     * @method Grid\Column|Collection note(string $label = null)
     * @method Grid\Column|Collection aid(string $label = null)
     * @method Grid\Column|Collection cashType(string $label = null)
     * @method Grid\Column|Collection outputItem(string $label = null)
     * @method Grid\Column|Collection rank(string $label = null)
     * @method Grid\Column|Collection creditType(string $label = null)
     * @method Grid\Column|Collection checkIN(string $label = null)
     * @method Grid\Column|Collection checkOut(string $label = null)
     * @method Grid\Column|Collection people(string $label = null)
     * @method Grid\Column|Collection checkWay(string $label = null)
     * @method Grid\Column|Collection target(string $label = null)
     * @method Grid\Column|Collection joinComment(string $label = null)
     * @method Grid\Column|Collection outComment(string $label = null)
     * @method Grid\Column|Collection deadline(string $label = null)
     * @method Grid\Column|Collection deadTime(string $label = null)
     * @method Grid\Column|Collection collectID(string $label = null)
     * @method Grid\Column|Collection lowNum(string $label = null)
     * @method Grid\Column|Collection deletetoken(string $label = null)
     * @method Grid\Column|Collection realNum(string $label = null)
     * @method Grid\Column|Collection shipmentID(string $label = null)
     * @method Grid\Column|Collection backID(string $label = null)
     * @method Grid\Column|Collection sellNum(string $label = null)
     * @method Grid\Column|Collection nowNum(string $label = null)
     * @method Grid\Column|Collection consignmentNum(string $label = null)
     * @method Grid\Column|Collection ok(string $label = null)
     * @method Grid\Column|Collection latitude(string $label = null)
     * @method Grid\Column|Collection longitude(string $label = null)
     * @method Grid\Column|Collection csOrderID(string $label = null)
     * @method Grid\Column|Collection csOrderNum(string $label = null)
     * @method Grid\Column|Collection orderTime(string $label = null)
     * @method Grid\Column|Collection usage(string $label = null)
     * @method Grid\Column|Collection cargoStatus(string $label = null)
     * @method Grid\Column|Collection cashStatus(string $label = null)
     * @method Grid\Column|Collection cargoTime(string $label = null)
     * @method Grid\Column|Collection cashInTime(string $label = null)
     * @method Grid\Column|Collection discount(string $label = null)
     * @method Grid\Column|Collection outDate(string $label = null)
     * @method Grid\Column|Collection deleteToken(string $label = null)
     * @method Grid\Column|Collection deleteName(string $label = null)
     * @method Grid\Column|Collection emailNotify(string $label = null)
     * @method Grid\Column|Collection phoneNotify(string $label = null)
     * @method Grid\Column|Collection sellPrice(string $label = null)
     * @method Grid\Column|Collection shipWay(string $label = null)
     * @method Grid\Column|Collection backNum(string $label = null)
     * @method Grid\Column|Collection display(string $label = null)
     * @method Grid\Column|Collection ECID(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection platformID(string $label = null)
     * @method Grid\Column|Collection ECOrderNum(string $label = null)
     * @method Grid\Column|Collection ECstatus(string $label = null)
     * @method Grid\Column|Collection orderID(string $label = null)
     * @method Grid\Column|Collection updateTime(string $label = null)
     * @method Grid\Column|Collection transportID(string $label = null)
     * @method Grid\Column|Collection trackingNumber(string $label = null)
     * @method Grid\Column|Collection invoiceID(string $label = null)
     * @method Grid\Column|Collection charge(string $label = null)
     * @method Grid\Column|Collection receiverName(string $label = null)
     * @method Grid\Column|Collection receiverPhone(string $label = null)
     * @method Grid\Column|Collection receiverAddress(string $label = null)
     * @method Grid\Column|Collection payway(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection comID(string $label = null)
     * @method Grid\Column|Collection CarrierType(string $label = null)
     * @method Grid\Column|Collection CarrierId1(string $label = null)
     * @method Grid\Column|Collection NPOBAN(string $label = null)
     * @method Grid\Column|Collection boxTime(string $label = null)
     * @method Grid\Column|Collection finishTime(string $label = null)
     * @method Grid\Column|Collection boxNum(string $label = null)
     * @method Grid\Column|Collection sendingTime(string $label = null)
     * @method Grid\Column|Collection platFormID(string $label = null)
     * @method Grid\Column|Collection platformName(string $label = null)
     * @method Grid\Column|Collection period(string $label = null)
     * @method Grid\Column|Collection InvoiceNum(string $label = null)
     * @method Grid\Column|Collection InoviceDateTime(string $label = null)
     * @method Grid\Column|Collection InvoiceCode(string $label = null)
     * @method Grid\Column|Collection InvoiceNumber(string $label = null)
     * @method Grid\Column|Collection RandomNumber(string $label = null)
     * @method Grid\Column|Collection BuyerIdentifier(string $label = null)
     * @method Grid\Column|Collection SellerIdentifier(string $label = null)
     * @method Grid\Column|Collection shopName(string $label = null)
     * @method Grid\Column|Collection orderNum(string $label = null)
     * @method Grid\Column|Collection DonateMark(string $label = null)
     * @method Grid\Column|Collection CarrierId2(string $label = null)
     * @method Grid\Column|Collection PrintMark(string $label = null)
     * @method Grid\Column|Collection depID(string $label = null)
     * @method Grid\Column|Collection productDetail(string $label = null)
     * @method Grid\Column|Collection invoiceType(string $label = null)
     * @method Grid\Column|Collection xmlout(string $label = null)
     * @method Grid\Column|Collection xmlOutTime(string $label = null)
     * @method Grid\Column|Collection invalid(string $label = null)
     * @method Grid\Column|Collection void(string $label = null)
     * @method Grid\Column|Collection AllowanceNumber(string $label = null)
     * @method Grid\Column|Collection AllowanceDateTime(string $label = null)
     * @method Grid\Column|Collection BuyerName(string $label = null)
     * @method Grid\Column|Collection BuyerAddress(string $label = null)
     * @method Grid\Column|Collection BuyerPersonInCharge(string $label = null)
     * @method Grid\Column|Collection BuyerTelephoneNumber(string $label = null)
     * @method Grid\Column|Collection BuyerFacsimileNumber(string $label = null)
     * @method Grid\Column|Collection BuyerEmailAddress(string $label = null)
     * @method Grid\Column|Collection BuyerCustomerNumber(string $label = null)
     * @method Grid\Column|Collection BuyerRoleRemark(string $label = null)
     * @method Grid\Column|Collection SellerName(string $label = null)
     * @method Grid\Column|Collection SellerAddress(string $label = null)
     * @method Grid\Column|Collection SellerPersonInCharge(string $label = null)
     * @method Grid\Column|Collection SellerTelephoneNumber(string $label = null)
     * @method Grid\Column|Collection SellerFacsimileNumber(string $label = null)
     * @method Grid\Column|Collection SellerEmailAddress(string $label = null)
     * @method Grid\Column|Collection SellerCustomerNumber(string $label = null)
     * @method Grid\Column|Collection SellerRoleRemark(string $label = null)
     * @method Grid\Column|Collection Attachment(string $label = null)
     * @method Grid\Column|Collection TaxAmount(string $label = null)
     * @method Grid\Column|Collection TotalAmount(string $label = null)
     * @method Grid\Column|Collection xmlOut(string $label = null)
     * @method Grid\Column|Collection CancelDateTime(string $label = null)
     * @method Grid\Column|Collection CancelReason(string $label = null)
     * @method Grid\Column|Collection Remark(string $label = null)
     * @method Grid\Column|Collection InvoiceDateTime(string $label = null)
     * @method Grid\Column|Collection ReturnTaxDocumentNumber(string $label = null)
     * @method Grid\Column|Collection ReceiveDateTime(string $label = null)
     * @method Grid\Column|Collection BuyerRemark(string $label = null)
     * @method Grid\Column|Collection timeChanger(string $label = null)
     * @method Grid\Column|Collection RejectInvoiceNumber(string $label = null)
     * @method Grid\Column|Collection RejectDateTime(string $label = null)
     * @method Grid\Column|Collection RejectReason(string $label = null)
     * @method Grid\Column|Collection YearMonth(string $label = null)
     * @method Grid\Column|Collection InvoiceTrack(string $label = null)
     * @method Grid\Column|Collection InvoiceBeginNo(string $label = null)
     * @method Grid\Column|Collection InvoiceEndNo(string $label = null)
     * @method Grid\Column|Collection InvoiceNext(string $label = null)
     * @method Grid\Column|Collection VoidDateTime(string $label = null)
     * @method Grid\Column|Collection VoidReason(string $label = null)
     * @method Grid\Column|Collection sending(string $label = null)
     * @method Grid\Column|Collection memo(string $label = null)
     * @method Grid\Column|Collection subject(string $label = null)
     * @method Grid\Column|Collection signature(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection fromAge(string $label = null)
     * @method Grid\Column|Collection toAge(string $label = null)
     * @method Grid\Column|Collection sendTime(string $label = null)
     * @method Grid\Column|Collection headers(string $label = null)
     * @method Grid\Column|Collection emailList(string $label = null)
     * @method Grid\Column|Collection functionID(string $label = null)
     * @method Grid\Column|Collection accountID(string $label = null)
     * @method Grid\Column|Collection eID(string $label = null)
     * @method Grid\Column|Collection priority(string $label = null)
     * @method Grid\Column|Collection err(string $label = null)
     * @method Grid\Column|Collection receiverNum(string $label = null)
     * @method Grid\Column|Collection point(string $label = null)
     * @method Grid\Column|Collection msg(string $label = null)
     * @method Grid\Column|Collection data(string $label = null)
     * @method Grid\Column|Collection rentID(string $label = null)
     * @method Grid\Column|Collection times(string $label = null)
     * @method Grid\Column|Collection termID(string $label = null)
     * @method Grid\Column|Collection mainNum(string $label = null)
     * @method Grid\Column|Collection IP(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection runTime(string $label = null)
     * @method Grid\Column|Collection purchaseID(string $label = null)
     * @method Grid\Column|Collection core(string $label = null)
     * @method Grid\Column|Collection six(string $label = null)
     * @method Grid\Column|Collection from(string $label = null)
     * @method Grid\Column|Collection to(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection check_shopID(string $label = null)
     * @method Grid\Column|Collection checked_at(string $label = null)
     * @method Grid\Column|Collection checked(string $label = null)
     * @method Grid\Column|Collection blackcont(string $label = null)
     * @method Grid\Column|Collection blackToken(string $label = null)
     * @method Grid\Column|Collection bonusStatus(string $label = null)
     * @method Grid\Column|Collection consumStatus(string $label = null)
     * @method Grid\Column|Collection levelID(string $label = null)
     * @method Grid\Column|Collection levelName(string $label = null)
     * @method Grid\Column|Collection barcode(string $label = null)
     * @method Grid\Column|Collection bonus(string $label = null)
     * @method Grid\Column|Collection rentLimit(string $label = null)
     * @method Grid\Column|Collection consumption(string $label = null)
     * @method Grid\Column|Collection msgID(string $label = null)
     * @method Grid\Column|Collection fromShopID(string $label = null)
     * @method Grid\Column|Collection fromAccount(string $label = null)
     * @method Grid\Column|Collection fromAid(string $label = null)
     * @method Grid\Column|Collection toAid(string $label = null)
     * @method Grid\Column|Collection toAccount(string $label = null)
     * @method Grid\Column|Collection createTime(string $label = null)
     * @method Grid\Column|Collection buyNum(string $label = null)
     * @method Grid\Column|Collection isConsignment(string $label = null)
     * @method Grid\Column|Collection applyDelete(string $label = null)
     * @method Grid\Column|Collection shippingDate(string $label = null)
     * @method Grid\Column|Collection rowID(string $label = null)
     * @method Grid\Column|Collection addressID(string $label = null)
     * @method Grid\Column|Collection eachCost(string $label = null)
     * @method Grid\Column|Collection sProductID(string $label = null)
     * @method Grid\Column|Collection payType(string $label = null)
     * @method Grid\Column|Collection sellID(string $label = null)
     * @method Grid\Column|Collection isOnline(string $label = null)
     * @method Grid\Column|Collection awardToken(string $label = null)
     * @method Grid\Column|Collection profit(string $label = null)
     * @method Grid\Column|Collection isNew(string $label = null)
     * @method Grid\Column|Collection diff(string $label = null)
     * @method Grid\Column|Collection finalTotal(string $label = null)
     * @method Grid\Column|Collection fee(string $label = null)
     * @method Grid\Column|Collection webPay(string $label = null)
     * @method Grid\Column|Collection creditFee(string $label = null)
     * @method Grid\Column|Collection subTotal(string $label = null)
     * @method Grid\Column|Collection shippingTime(string $label = null)
     * @method Grid\Column|Collection orderComment(string $label = null)
     * @method Grid\Column|Collection makeInvoice(string $label = null)
     * @method Grid\Column|Collection receiver(string $label = null)
     * @method Grid\Column|Collection defaultToken(string $label = null)
     * @method Grid\Column|Collection destinationShopID(string $label = null)
     * @method Grid\Column|Collection shippingFee(string $label = null)
     * @method Grid\Column|Collection adjustWay(string $label = null)
     * @method Grid\Column|Collection adjustToken(string $label = null)
     * @method Grid\Column|Collection adjustFlag(string $label = null)
     * @method Grid\Column|Collection adjustID(string $label = null)
     * @method Grid\Column|Collection requestTime(string $label = null)
     * @method Grid\Column|Collection backTime(string $label = null)
     * @method Grid\Column|Collection backToken(string $label = null)
     * @method Grid\Column|Collection backFlag(string $label = null)
     * @method Grid\Column|Collection receiverTime(string $label = null)
     * @method Grid\Column|Collection distributeName(string $label = null)
     * @method Grid\Column|Collection upDiscount(string $label = null)
     * @method Grid\Column|Collection yearmonth(string $label = null)
     * @method Grid\Column|Collection distributeType(string $label = null)
     * @method Grid\Column|Collection shipmentCode(string $label = null)
     * @method Grid\Column|Collection shippingNum(string $label = null)
     * @method Grid\Column|Collection shipmentComment(string $label = null)
     * @method Grid\Column|Collection arriveTime(string $label = null)
     * @method Grid\Column|Collection shipmentFee(string $label = null)
     * @method Grid\Column|Collection invoiceDetail(string $label = null)
     * @method Grid\Column|Collection hidePrice(string $label = null)
     * @method Grid\Column|Collection assignDate(string $label = null)
     * @method Grid\Column|Collection assignT(string $label = null)
     * @method Grid\Column|Collection tcgTotal(string $label = null)
     * @method Grid\Column|Collection sendKY(string $label = null)
     * @method Grid\Column|Collection money(string $label = null)
     * @method Grid\Column|Collection bsetDiscount(string $label = null)
     * @method Grid\Column|Collection best30(string $label = null)
     * @method Grid\Column|Collection targetStart(string $label = null)
     * @method Grid\Column|Collection targetEnd(string $label = null)
     * @method Grid\Column|Collection onYear(string $label = null)
     * @method Grid\Column|Collection upbonus(string $label = null)
     * @method Grid\Column|Collection bonusDiff(string $label = null)
     * @method Grid\Column|Collection boxProductID(string $label = null)
     * @method Grid\Column|Collection unitProductID(string $label = null)
     * @method Grid\Column|Collection unitToBox(string $label = null)
     * @method Grid\Column|Collection birthday(string $label = null)
     * @method Grid\Column|Collection joinTime(string $label = null)
     * @method Grid\Column|Collection myBonus(string $label = null)
     * @method Grid\Column|Collection adblock(string $label = null)
     * @method Grid\Column|Collection PFID(string $label = null)
     * @method Grid\Column|Collection productStr(string $label = null)
     * @method Grid\Column|Collection packingNum(string $label = null)
     * @method Grid\Column|Collection parentID(string $label = null)
     * @method Grid\Column|Collection ZHName(string $label = null)
     * @method Grid\Column|Collection ENGName(string $label = null)
     * @method Grid\Column|Collection language(string $label = null)
     * @method Grid\Column|Collection minDiscount(string $label = null)
     * @method Grid\Column|Collection minPeople(string $label = null)
     * @method Grid\Column|Collection maxPeople(string $label = null)
     * @method Grid\Column|Collection age(string $label = null)
     * @method Grid\Column|Collection suppliers(string $label = null)
     * @method Grid\Column|Collection category(string $label = null)
     * @method Grid\Column|Collection productNum(string $label = null)
     * @method Grid\Column|Collection buyPrice(string $label = null)
     * @method Grid\Column|Collection buyDiscount(string $label = null)
     * @method Grid\Column|Collection openStatus(string $label = null)
     * @method Grid\Column|Collection publisher(string $label = null)
     * @method Grid\Column|Collection phaBid(string $label = null)
     * @method Grid\Column|Collection bidExist(string $label = null)
     * @method Grid\Column|Collection cardSleeve(string $label = null)
     * @method Grid\Column|Collection flowRate(string $label = null)
     * @method Grid\Column|Collection flowNum(string $label = null)
     * @method Grid\Column|Collection nonInvoice(string $label = null)
     * @method Grid\Column|Collection nonJoinPurchaceDiscount(string $label = null)
     * @method Grid\Column|Collection rule(string $label = null)
     * @method Grid\Column|Collection limitNum(string $label = null)
     * @method Grid\Column|Collection nonBonus(string $label = null)
     * @method Grid\Column|Collection case(string $label = null)
     * @method Grid\Column|Collection recent(string $label = null)
     * @method Grid\Column|Collection cabinet(string $label = null)
     * @method Grid\Column|Collection hide(string $label = null)
     * @method Grid\Column|Collection sellAmount(string $label = null)
     * @method Grid\Column|Collection Sconsignment(string $label = null)
     * @method Grid\Column|Collection patch(string $label = null)
     * @method Grid\Column|Collection ig(string $label = null)
     * @method Grid\Column|Collection igBreak(string $label = null)
     * @method Grid\Column|Collection length(string $label = null)
     * @method Grid\Column|Collection width(string $label = null)
     * @method Grid\Column|Collection height(string $label = null)
     * @method Grid\Column|Collection weight(string $label = null)
     * @method Grid\Column|Collection orgNum(string $label = null)
     * @method Grid\Column|Collection resultNum(string $label = null)
     * @method Grid\Column|Collection post(string $label = null)
     * @method Grid\Column|Collection pID(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection startConsignment(string $label = null)
     * @method Grid\Column|Collection supplierID(string $label = null)
     * @method Grid\Column|Collection ky(string $label = null)
     * @method Grid\Column|Collection phantasia(string $label = null)
     * @method Grid\Column|Collection stockNum(string $label = null)
     * @method Grid\Column|Collection checkNum(string $label = null)
     * @method Grid\Column|Collection preTime(string $label = null)
     * @method Grid\Column|Collection purchaseTotal(string $label = null)
     * @method Grid\Column|Collection accountTime(string $label = null)
     * @method Grid\Column|Collection shareFee(string $label = null)
     * @method Grid\Column|Collection tax(string $label = null)
     * @method Grid\Column|Collection typeID(string $label = null)
     * @method Grid\Column|Collection typeOrder(string $label = null)
     * @method Grid\Column|Collection limitAmount(string $label = null)
     * @method Grid\Column|Collection used(string $label = null)
     * @method Grid\Column|Collection key(string $label = null)
     * @method Grid\Column|Collection val(string $label = null)
     * @method Grid\Column|Collection sql(string $label = null)
     * @method Grid\Column|Collection rentTime(string $label = null)
     * @method Grid\Column|Collection return(string $label = null)
     * @method Grid\Column|Collection table(string $label = null)
     * @method Grid\Column|Collection dir(string $label = null)
     * @method Grid\Column|Collection index(string $label = null)
     * @method Grid\Column|Collection userID(string $label = null)
     * @method Grid\Column|Collection sanguoshaID(string $label = null)
     * @method Grid\Column|Collection delete(string $label = null)
     * @method Grid\Column|Collection text(string $label = null)
     * @method Grid\Column|Collection dueTime(string $label = null)
     * @method Grid\Column|Collection reNew(string $label = null)
     * @method Grid\Column|Collection end_at(string $label = null)
     * @method Grid\Column|Collection start_at(string $label = null)
     * @method Grid\Column|Collection sp_order_id(string $label = null)
     * @method Grid\Column|Collection errno(string $label = null)
     * @method Grid\Column|Collection correctTime(string $label = null)
     * @method Grid\Column|Collection licenceCode(string $label = null)
     * @method Grid\Column|Collection dirtyBit(string $label = null)
     * @method Grid\Column|Collection lastUpdate(string $label = null)
     * @method Grid\Column|Collection buffering(string $label = null)
     * @method Grid\Column|Collection offset(string $label = null)
     * @method Grid\Column|Collection consignmentStatus(string $label = null)
     * @method Grid\Column|Collection shipmentStatus(string $label = null)
     * @method Grid\Column|Collection handShake(string $label = null)
     * @method Grid\Column|Collection handShakeSign(string $label = null)
     * @method Grid\Column|Collection jointype(string $label = null)
     * @method Grid\Column|Collection shipOut(string $label = null)
     * @method Grid\Column|Collection lastBuffer(string $label = null)
     * @method Grid\Column|Collection fireData(string $label = null)
     * @method Grid\Column|Collection tableNum(string $label = null)
     * @method Grid\Column|Collection holiday(string $label = null)
     * @method Grid\Column|Collection showPrice(string $label = null)
     * @method Grid\Column|Collection shopLogin(string $label = null)
     * @method Grid\Column|Collection contactPerson(string $label = null)
     * @method Grid\Column|Collection fax(string $label = null)
     * @method Grid\Column|Collection invoiceByShip(string $label = null)
     * @method Grid\Column|Collection shipComment(string $label = null)
     * @method Grid\Column|Collection assignTime(string $label = null)
     * @method Grid\Column|Collection shipInterval(string $label = null)
     * @method Grid\Column|Collection percent(string $label = null)
     * @method Grid\Column|Collection safeCon(string $label = null)
     * @method Grid\Column|Collection stockCon(string $label = null)
     * @method Grid\Column|Collection lowerNum(string $label = null)
     * @method Grid\Column|Collection autoOrder(string $label = null)
     * @method Grid\Column|Collection suitID(string $label = null)
     * @method Grid\Column|Collection mainProductID(string $label = null)
     * @method Grid\Column|Collection snum(string $label = null)
     * @method Grid\Column|Collection invoiceWay(string $label = null)
     * @method Grid\Column|Collection contact(string $label = null)
     * @method Grid\Column|Collection setting(string $label = null)
     * @method Grid\Column|Collection temp(string $label = null)
     * @method Grid\Column|Collection keyValue(string $label = null)
     * @method Grid\Column|Collection indexValue(string $label = null)
     * @method Grid\Column|Collection term(string $label = null)
     * @method Grid\Column|Collection creatTime(string $label = null)
     * @method Grid\Column|Collection estimateTime(string $label = null)
     * @method Grid\Column|Collection startTime(string $label = null)
     * @method Grid\Column|Collection endTime(string $label = null)
     * @method Grid\Column|Collection top10(string $label = null)
     * @method Grid\Column|Collection transportNameID(string $label = null)
     * @method Grid\Column|Collection transportName(string $label = null)
     * @method Grid\Column|Collection csorderID(string $label = null)
     * @method Grid\Column|Collection datatransfer(string $label = null)
     * @method Grid\Column|Collection buyID(string $label = null)
     * @method Grid\Column|Collection BuyName(string $label = null)
     * @method Grid\Column|Collection postNum(string $label = null)
     * @method Grid\Column|Collection counntry(string $label = null)
     * @method Grid\Column|Collection optionID(string $label = null)
     * @method Grid\Column|Collection sendCombine(string $label = null)
     * @method Grid\Column|Collection V(string $label = null)
     * @method Grid\Column|Collection cool(string $label = null)
     * @method Grid\Column|Collection card(string $label = null)
     * @method Grid\Column|Collection cat(string $label = null)
     * @method Grid\Column|Collection special(string $label = null)
     * @method Grid\Column|Collection addressErr(string $label = null)
     * @method Grid\Column|Collection transportRemarks(string $label = null)
     * @method Grid\Column|Collection packageNumber(string $label = null)
     * @method Grid\Column|Collection invoiceNumber(string $label = null)
     * @method Grid\Column|Collection sub_code(string $label = null)
     * @method Grid\Column|Collection borrow(string $label = null)
     * @method Grid\Column|Collection loan(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection name
     * @property Show\Field|Collection remain
     * @property Show\Field|Collection comment
     * @property Show\Field|Collection type
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection keywords
     * @property Show\Field|Collection og_image
     * @property Show\Field|Collection secs
     * @property Show\Field|Collection footers
     * @property Show\Field|Collection content
     * @property Show\Field|Collection start
     * @property Show\Field|Collection end
     * @property Show\Field|Collection wait
     * @property Show\Field|Collection iframe
     * @property Show\Field|Collection iframe_height
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection logo
     * @property Show\Field|Collection home_page
     * @property Show\Field|Collection zip_url
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection permission
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection date
     * @property Show\Field|Collection summary
     * @property Show\Field|Collection income
     * @property Show\Field|Collection pay
     * @property Show\Field|Collection account_id
     * @property Show\Field|Collection ledger_id
     * @property Show\Field|Collection timestamp
     * @property Show\Field|Collection is_attach
     * @property Show\Field|Collection admin_user_id
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection invoice
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection balance
     * @property Show\Field|Collection subpoea_id
     * @property Show\Field|Collection subpoean_id
     * @property Show\Field|Collection subpoena_id
     * @property Show\Field|Collection due_date
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection account
     * @property Show\Field|Collection pw
     * @property Show\Field|Collection level
     * @property Show\Field|Collection shopID
     * @property Show\Field|Collection depName
     * @property Show\Field|Collection productID
     * @property Show\Field|Collection year
     * @property Show\Field|Collection month
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection avgCost
     * @property Show\Field|Collection totalCost
     * @property Show\Field|Collection mainID
     * @property Show\Field|Collection lockKey
     * @property Show\Field|Collection day
     * @property Show\Field|Collection checkID
     * @property Show\Field|Collection handle
     * @property Show\Field|Collection result
     * @property Show\Field|Collection O_amount
     * @property Show\Field|Collection O_totalCost
     * @property Show\Field|Collection P_amount
     * @property Show\Field|Collection P_totalCost
     * @property Show\Field|Collection move
     * @property Show\Field|Collection S_amount
     * @property Show\Field|Collection S_totalSellPrice
     * @property Show\Field|Collection S_avgPrice
     * @property Show\Field|Collection S_totalCost
     * @property Show\Field|Collection E_amount
     * @property Show\Field|Collection E_totalCost
     * @property Show\Field|Collection consignment
     * @property Show\Field|Collection close
     * @property Show\Field|Collection toShopID
     * @property Show\Field|Collection CSS_totalCost
     * @property Show\Field|Collection CSS_totalSellPrice
     * @property Show\Field|Collection O_profit
     * @property Show\Field|Collection All_profit
     * @property Show\Field|Collection CSS_profit
     * @property Show\Field|Collection OHS_totalSellPrice
     * @property Show\Field|Collection OHS_profit
     * @property Show\Field|Collection announceID
     * @property Show\Field|Collection autoBtn
     * @property Show\Field|Collection time
     * @property Show\Field|Collection source
     * @property Show\Field|Collection confirm
     * @property Show\Field|Collection announceTime
     * @property Show\Field|Collection acceptTime
     * @property Show\Field|Collection IDNumber
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection address
     * @property Show\Field|Collection bankAccount
     * @property Show\Field|Collection bankCode
     * @property Show\Field|Collection bfID
     * @property Show\Field|Collection code
     * @property Show\Field|Collection memberID
     * @property Show\Field|Collection total
     * @property Show\Field|Collection status
     * @property Show\Field|Collection reason
     * @property Show\Field|Collection useBonus
     * @property Show\Field|Collection purchasePrice
     * @property Show\Field|Collection changeID
     * @property Show\Field|Collection cost
     * @property Show\Field|Collection function
     * @property Show\Field|Collection inTime
     * @property Show\Field|Collection finTime
     * @property Show\Field|Collection reportTime
     * @property Show\Field|Collection reporter
     * @property Show\Field|Collection operation
     * @property Show\Field|Collection expected
     * @property Show\Field|Collection fixtime
     * @property Show\Field|Collection CSID
     * @property Show\Field|Collection CSsize
     * @property Show\Field|Collection timeStamp
     * @property Show\Field|Collection num
     * @property Show\Field|Collection MIN
     * @property Show\Field|Collection MOUT
     * @property Show\Field|Collection credit
     * @property Show\Field|Collection note
     * @property Show\Field|Collection aid
     * @property Show\Field|Collection cashType
     * @property Show\Field|Collection outputItem
     * @property Show\Field|Collection rank
     * @property Show\Field|Collection creditType
     * @property Show\Field|Collection checkIN
     * @property Show\Field|Collection checkOut
     * @property Show\Field|Collection people
     * @property Show\Field|Collection checkWay
     * @property Show\Field|Collection target
     * @property Show\Field|Collection joinComment
     * @property Show\Field|Collection outComment
     * @property Show\Field|Collection deadline
     * @property Show\Field|Collection deadTime
     * @property Show\Field|Collection collectID
     * @property Show\Field|Collection lowNum
     * @property Show\Field|Collection deletetoken
     * @property Show\Field|Collection realNum
     * @property Show\Field|Collection shipmentID
     * @property Show\Field|Collection backID
     * @property Show\Field|Collection sellNum
     * @property Show\Field|Collection nowNum
     * @property Show\Field|Collection consignmentNum
     * @property Show\Field|Collection ok
     * @property Show\Field|Collection latitude
     * @property Show\Field|Collection longitude
     * @property Show\Field|Collection csOrderID
     * @property Show\Field|Collection csOrderNum
     * @property Show\Field|Collection orderTime
     * @property Show\Field|Collection usage
     * @property Show\Field|Collection cargoStatus
     * @property Show\Field|Collection cashStatus
     * @property Show\Field|Collection cargoTime
     * @property Show\Field|Collection cashInTime
     * @property Show\Field|Collection discount
     * @property Show\Field|Collection outDate
     * @property Show\Field|Collection deleteToken
     * @property Show\Field|Collection deleteName
     * @property Show\Field|Collection emailNotify
     * @property Show\Field|Collection phoneNotify
     * @property Show\Field|Collection sellPrice
     * @property Show\Field|Collection shipWay
     * @property Show\Field|Collection backNum
     * @property Show\Field|Collection display
     * @property Show\Field|Collection ECID
     * @property Show\Field|Collection price
     * @property Show\Field|Collection platformID
     * @property Show\Field|Collection ECOrderNum
     * @property Show\Field|Collection ECstatus
     * @property Show\Field|Collection orderID
     * @property Show\Field|Collection updateTime
     * @property Show\Field|Collection transportID
     * @property Show\Field|Collection trackingNumber
     * @property Show\Field|Collection invoiceID
     * @property Show\Field|Collection charge
     * @property Show\Field|Collection receiverName
     * @property Show\Field|Collection receiverPhone
     * @property Show\Field|Collection receiverAddress
     * @property Show\Field|Collection payway
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection comID
     * @property Show\Field|Collection CarrierType
     * @property Show\Field|Collection CarrierId1
     * @property Show\Field|Collection NPOBAN
     * @property Show\Field|Collection boxTime
     * @property Show\Field|Collection finishTime
     * @property Show\Field|Collection boxNum
     * @property Show\Field|Collection sendingTime
     * @property Show\Field|Collection platFormID
     * @property Show\Field|Collection platformName
     * @property Show\Field|Collection period
     * @property Show\Field|Collection InvoiceNum
     * @property Show\Field|Collection InoviceDateTime
     * @property Show\Field|Collection InvoiceCode
     * @property Show\Field|Collection InvoiceNumber
     * @property Show\Field|Collection RandomNumber
     * @property Show\Field|Collection BuyerIdentifier
     * @property Show\Field|Collection SellerIdentifier
     * @property Show\Field|Collection shopName
     * @property Show\Field|Collection orderNum
     * @property Show\Field|Collection DonateMark
     * @property Show\Field|Collection CarrierId2
     * @property Show\Field|Collection PrintMark
     * @property Show\Field|Collection depID
     * @property Show\Field|Collection productDetail
     * @property Show\Field|Collection invoiceType
     * @property Show\Field|Collection xmlout
     * @property Show\Field|Collection xmlOutTime
     * @property Show\Field|Collection invalid
     * @property Show\Field|Collection void
     * @property Show\Field|Collection AllowanceNumber
     * @property Show\Field|Collection AllowanceDateTime
     * @property Show\Field|Collection BuyerName
     * @property Show\Field|Collection BuyerAddress
     * @property Show\Field|Collection BuyerPersonInCharge
     * @property Show\Field|Collection BuyerTelephoneNumber
     * @property Show\Field|Collection BuyerFacsimileNumber
     * @property Show\Field|Collection BuyerEmailAddress
     * @property Show\Field|Collection BuyerCustomerNumber
     * @property Show\Field|Collection BuyerRoleRemark
     * @property Show\Field|Collection SellerName
     * @property Show\Field|Collection SellerAddress
     * @property Show\Field|Collection SellerPersonInCharge
     * @property Show\Field|Collection SellerTelephoneNumber
     * @property Show\Field|Collection SellerFacsimileNumber
     * @property Show\Field|Collection SellerEmailAddress
     * @property Show\Field|Collection SellerCustomerNumber
     * @property Show\Field|Collection SellerRoleRemark
     * @property Show\Field|Collection Attachment
     * @property Show\Field|Collection TaxAmount
     * @property Show\Field|Collection TotalAmount
     * @property Show\Field|Collection xmlOut
     * @property Show\Field|Collection CancelDateTime
     * @property Show\Field|Collection CancelReason
     * @property Show\Field|Collection Remark
     * @property Show\Field|Collection InvoiceDateTime
     * @property Show\Field|Collection ReturnTaxDocumentNumber
     * @property Show\Field|Collection ReceiveDateTime
     * @property Show\Field|Collection BuyerRemark
     * @property Show\Field|Collection timeChanger
     * @property Show\Field|Collection RejectInvoiceNumber
     * @property Show\Field|Collection RejectDateTime
     * @property Show\Field|Collection RejectReason
     * @property Show\Field|Collection YearMonth
     * @property Show\Field|Collection InvoiceTrack
     * @property Show\Field|Collection InvoiceBeginNo
     * @property Show\Field|Collection InvoiceEndNo
     * @property Show\Field|Collection InvoiceNext
     * @property Show\Field|Collection VoidDateTime
     * @property Show\Field|Collection VoidReason
     * @property Show\Field|Collection sending
     * @property Show\Field|Collection memo
     * @property Show\Field|Collection subject
     * @property Show\Field|Collection signature
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection fromAge
     * @property Show\Field|Collection toAge
     * @property Show\Field|Collection sendTime
     * @property Show\Field|Collection headers
     * @property Show\Field|Collection emailList
     * @property Show\Field|Collection functionID
     * @property Show\Field|Collection accountID
     * @property Show\Field|Collection eID
     * @property Show\Field|Collection priority
     * @property Show\Field|Collection err
     * @property Show\Field|Collection receiverNum
     * @property Show\Field|Collection point
     * @property Show\Field|Collection msg
     * @property Show\Field|Collection data
     * @property Show\Field|Collection rentID
     * @property Show\Field|Collection times
     * @property Show\Field|Collection termID
     * @property Show\Field|Collection mainNum
     * @property Show\Field|Collection IP
     * @property Show\Field|Collection url
     * @property Show\Field|Collection runTime
     * @property Show\Field|Collection purchaseID
     * @property Show\Field|Collection core
     * @property Show\Field|Collection six
     * @property Show\Field|Collection from
     * @property Show\Field|Collection to
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection check_shopID
     * @property Show\Field|Collection checked_at
     * @property Show\Field|Collection checked
     * @property Show\Field|Collection blackcont
     * @property Show\Field|Collection blackToken
     * @property Show\Field|Collection bonusStatus
     * @property Show\Field|Collection consumStatus
     * @property Show\Field|Collection levelID
     * @property Show\Field|Collection levelName
     * @property Show\Field|Collection barcode
     * @property Show\Field|Collection bonus
     * @property Show\Field|Collection rentLimit
     * @property Show\Field|Collection consumption
     * @property Show\Field|Collection msgID
     * @property Show\Field|Collection fromShopID
     * @property Show\Field|Collection fromAccount
     * @property Show\Field|Collection fromAid
     * @property Show\Field|Collection toAid
     * @property Show\Field|Collection toAccount
     * @property Show\Field|Collection createTime
     * @property Show\Field|Collection buyNum
     * @property Show\Field|Collection isConsignment
     * @property Show\Field|Collection applyDelete
     * @property Show\Field|Collection shippingDate
     * @property Show\Field|Collection rowID
     * @property Show\Field|Collection addressID
     * @property Show\Field|Collection eachCost
     * @property Show\Field|Collection sProductID
     * @property Show\Field|Collection payType
     * @property Show\Field|Collection sellID
     * @property Show\Field|Collection isOnline
     * @property Show\Field|Collection awardToken
     * @property Show\Field|Collection profit
     * @property Show\Field|Collection isNew
     * @property Show\Field|Collection diff
     * @property Show\Field|Collection finalTotal
     * @property Show\Field|Collection fee
     * @property Show\Field|Collection webPay
     * @property Show\Field|Collection creditFee
     * @property Show\Field|Collection subTotal
     * @property Show\Field|Collection shippingTime
     * @property Show\Field|Collection orderComment
     * @property Show\Field|Collection makeInvoice
     * @property Show\Field|Collection receiver
     * @property Show\Field|Collection defaultToken
     * @property Show\Field|Collection destinationShopID
     * @property Show\Field|Collection shippingFee
     * @property Show\Field|Collection adjustWay
     * @property Show\Field|Collection adjustToken
     * @property Show\Field|Collection adjustFlag
     * @property Show\Field|Collection adjustID
     * @property Show\Field|Collection requestTime
     * @property Show\Field|Collection backTime
     * @property Show\Field|Collection backToken
     * @property Show\Field|Collection backFlag
     * @property Show\Field|Collection receiverTime
     * @property Show\Field|Collection distributeName
     * @property Show\Field|Collection upDiscount
     * @property Show\Field|Collection yearmonth
     * @property Show\Field|Collection distributeType
     * @property Show\Field|Collection shipmentCode
     * @property Show\Field|Collection shippingNum
     * @property Show\Field|Collection shipmentComment
     * @property Show\Field|Collection arriveTime
     * @property Show\Field|Collection shipmentFee
     * @property Show\Field|Collection invoiceDetail
     * @property Show\Field|Collection hidePrice
     * @property Show\Field|Collection assignDate
     * @property Show\Field|Collection assignT
     * @property Show\Field|Collection tcgTotal
     * @property Show\Field|Collection sendKY
     * @property Show\Field|Collection money
     * @property Show\Field|Collection bsetDiscount
     * @property Show\Field|Collection best30
     * @property Show\Field|Collection targetStart
     * @property Show\Field|Collection targetEnd
     * @property Show\Field|Collection onYear
     * @property Show\Field|Collection upbonus
     * @property Show\Field|Collection bonusDiff
     * @property Show\Field|Collection boxProductID
     * @property Show\Field|Collection unitProductID
     * @property Show\Field|Collection unitToBox
     * @property Show\Field|Collection birthday
     * @property Show\Field|Collection joinTime
     * @property Show\Field|Collection myBonus
     * @property Show\Field|Collection adblock
     * @property Show\Field|Collection PFID
     * @property Show\Field|Collection productStr
     * @property Show\Field|Collection packingNum
     * @property Show\Field|Collection parentID
     * @property Show\Field|Collection ZHName
     * @property Show\Field|Collection ENGName
     * @property Show\Field|Collection language
     * @property Show\Field|Collection minDiscount
     * @property Show\Field|Collection minPeople
     * @property Show\Field|Collection maxPeople
     * @property Show\Field|Collection age
     * @property Show\Field|Collection suppliers
     * @property Show\Field|Collection category
     * @property Show\Field|Collection productNum
     * @property Show\Field|Collection buyPrice
     * @property Show\Field|Collection buyDiscount
     * @property Show\Field|Collection openStatus
     * @property Show\Field|Collection publisher
     * @property Show\Field|Collection phaBid
     * @property Show\Field|Collection bidExist
     * @property Show\Field|Collection cardSleeve
     * @property Show\Field|Collection flowRate
     * @property Show\Field|Collection flowNum
     * @property Show\Field|Collection nonInvoice
     * @property Show\Field|Collection nonJoinPurchaceDiscount
     * @property Show\Field|Collection rule
     * @property Show\Field|Collection limitNum
     * @property Show\Field|Collection nonBonus
     * @property Show\Field|Collection case
     * @property Show\Field|Collection recent
     * @property Show\Field|Collection cabinet
     * @property Show\Field|Collection hide
     * @property Show\Field|Collection sellAmount
     * @property Show\Field|Collection Sconsignment
     * @property Show\Field|Collection patch
     * @property Show\Field|Collection ig
     * @property Show\Field|Collection igBreak
     * @property Show\Field|Collection length
     * @property Show\Field|Collection width
     * @property Show\Field|Collection height
     * @property Show\Field|Collection weight
     * @property Show\Field|Collection orgNum
     * @property Show\Field|Collection resultNum
     * @property Show\Field|Collection post
     * @property Show\Field|Collection pID
     * @property Show\Field|Collection input
     * @property Show\Field|Collection startConsignment
     * @property Show\Field|Collection supplierID
     * @property Show\Field|Collection ky
     * @property Show\Field|Collection phantasia
     * @property Show\Field|Collection stockNum
     * @property Show\Field|Collection checkNum
     * @property Show\Field|Collection preTime
     * @property Show\Field|Collection purchaseTotal
     * @property Show\Field|Collection accountTime
     * @property Show\Field|Collection shareFee
     * @property Show\Field|Collection tax
     * @property Show\Field|Collection typeID
     * @property Show\Field|Collection typeOrder
     * @property Show\Field|Collection limitAmount
     * @property Show\Field|Collection used
     * @property Show\Field|Collection key
     * @property Show\Field|Collection val
     * @property Show\Field|Collection sql
     * @property Show\Field|Collection rentTime
     * @property Show\Field|Collection return
     * @property Show\Field|Collection table
     * @property Show\Field|Collection dir
     * @property Show\Field|Collection index
     * @property Show\Field|Collection userID
     * @property Show\Field|Collection sanguoshaID
     * @property Show\Field|Collection delete
     * @property Show\Field|Collection text
     * @property Show\Field|Collection dueTime
     * @property Show\Field|Collection reNew
     * @property Show\Field|Collection end_at
     * @property Show\Field|Collection start_at
     * @property Show\Field|Collection sp_order_id
     * @property Show\Field|Collection errno
     * @property Show\Field|Collection correctTime
     * @property Show\Field|Collection licenceCode
     * @property Show\Field|Collection dirtyBit
     * @property Show\Field|Collection lastUpdate
     * @property Show\Field|Collection buffering
     * @property Show\Field|Collection offset
     * @property Show\Field|Collection consignmentStatus
     * @property Show\Field|Collection shipmentStatus
     * @property Show\Field|Collection handShake
     * @property Show\Field|Collection handShakeSign
     * @property Show\Field|Collection jointype
     * @property Show\Field|Collection shipOut
     * @property Show\Field|Collection lastBuffer
     * @property Show\Field|Collection fireData
     * @property Show\Field|Collection tableNum
     * @property Show\Field|Collection holiday
     * @property Show\Field|Collection showPrice
     * @property Show\Field|Collection shopLogin
     * @property Show\Field|Collection contactPerson
     * @property Show\Field|Collection fax
     * @property Show\Field|Collection invoiceByShip
     * @property Show\Field|Collection shipComment
     * @property Show\Field|Collection assignTime
     * @property Show\Field|Collection shipInterval
     * @property Show\Field|Collection percent
     * @property Show\Field|Collection safeCon
     * @property Show\Field|Collection stockCon
     * @property Show\Field|Collection lowerNum
     * @property Show\Field|Collection autoOrder
     * @property Show\Field|Collection suitID
     * @property Show\Field|Collection mainProductID
     * @property Show\Field|Collection snum
     * @property Show\Field|Collection invoiceWay
     * @property Show\Field|Collection contact
     * @property Show\Field|Collection setting
     * @property Show\Field|Collection temp
     * @property Show\Field|Collection keyValue
     * @property Show\Field|Collection indexValue
     * @property Show\Field|Collection term
     * @property Show\Field|Collection creatTime
     * @property Show\Field|Collection estimateTime
     * @property Show\Field|Collection startTime
     * @property Show\Field|Collection endTime
     * @property Show\Field|Collection top10
     * @property Show\Field|Collection transportNameID
     * @property Show\Field|Collection transportName
     * @property Show\Field|Collection csorderID
     * @property Show\Field|Collection datatransfer
     * @property Show\Field|Collection buyID
     * @property Show\Field|Collection BuyName
     * @property Show\Field|Collection postNum
     * @property Show\Field|Collection counntry
     * @property Show\Field|Collection optionID
     * @property Show\Field|Collection sendCombine
     * @property Show\Field|Collection V
     * @property Show\Field|Collection cool
     * @property Show\Field|Collection card
     * @property Show\Field|Collection cat
     * @property Show\Field|Collection special
     * @property Show\Field|Collection addressErr
     * @property Show\Field|Collection transportRemarks
     * @property Show\Field|Collection packageNumber
     * @property Show\Field|Collection invoiceNumber
     * @property Show\Field|Collection sub_code
     * @property Show\Field|Collection borrow
     * @property Show\Field|Collection loan
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection remain(string $label = null)
     * @method Show\Field|Collection comment(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection keywords(string $label = null)
     * @method Show\Field|Collection og_image(string $label = null)
     * @method Show\Field|Collection secs(string $label = null)
     * @method Show\Field|Collection footers(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection start(string $label = null)
     * @method Show\Field|Collection end(string $label = null)
     * @method Show\Field|Collection wait(string $label = null)
     * @method Show\Field|Collection iframe(string $label = null)
     * @method Show\Field|Collection iframe_height(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection logo(string $label = null)
     * @method Show\Field|Collection home_page(string $label = null)
     * @method Show\Field|Collection zip_url(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection permission(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection summary(string $label = null)
     * @method Show\Field|Collection income(string $label = null)
     * @method Show\Field|Collection pay(string $label = null)
     * @method Show\Field|Collection account_id(string $label = null)
     * @method Show\Field|Collection ledger_id(string $label = null)
     * @method Show\Field|Collection timestamp(string $label = null)
     * @method Show\Field|Collection is_attach(string $label = null)
     * @method Show\Field|Collection admin_user_id(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection invoice(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection balance(string $label = null)
     * @method Show\Field|Collection subpoea_id(string $label = null)
     * @method Show\Field|Collection subpoean_id(string $label = null)
     * @method Show\Field|Collection subpoena_id(string $label = null)
     * @method Show\Field|Collection due_date(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection account(string $label = null)
     * @method Show\Field|Collection pw(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection shopID(string $label = null)
     * @method Show\Field|Collection depName(string $label = null)
     * @method Show\Field|Collection productID(string $label = null)
     * @method Show\Field|Collection year(string $label = null)
     * @method Show\Field|Collection month(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection avgCost(string $label = null)
     * @method Show\Field|Collection totalCost(string $label = null)
     * @method Show\Field|Collection mainID(string $label = null)
     * @method Show\Field|Collection lockKey(string $label = null)
     * @method Show\Field|Collection day(string $label = null)
     * @method Show\Field|Collection checkID(string $label = null)
     * @method Show\Field|Collection handle(string $label = null)
     * @method Show\Field|Collection result(string $label = null)
     * @method Show\Field|Collection O_amount(string $label = null)
     * @method Show\Field|Collection O_totalCost(string $label = null)
     * @method Show\Field|Collection P_amount(string $label = null)
     * @method Show\Field|Collection P_totalCost(string $label = null)
     * @method Show\Field|Collection move(string $label = null)
     * @method Show\Field|Collection S_amount(string $label = null)
     * @method Show\Field|Collection S_totalSellPrice(string $label = null)
     * @method Show\Field|Collection S_avgPrice(string $label = null)
     * @method Show\Field|Collection S_totalCost(string $label = null)
     * @method Show\Field|Collection E_amount(string $label = null)
     * @method Show\Field|Collection E_totalCost(string $label = null)
     * @method Show\Field|Collection consignment(string $label = null)
     * @method Show\Field|Collection close(string $label = null)
     * @method Show\Field|Collection toShopID(string $label = null)
     * @method Show\Field|Collection CSS_totalCost(string $label = null)
     * @method Show\Field|Collection CSS_totalSellPrice(string $label = null)
     * @method Show\Field|Collection O_profit(string $label = null)
     * @method Show\Field|Collection All_profit(string $label = null)
     * @method Show\Field|Collection CSS_profit(string $label = null)
     * @method Show\Field|Collection OHS_totalSellPrice(string $label = null)
     * @method Show\Field|Collection OHS_profit(string $label = null)
     * @method Show\Field|Collection announceID(string $label = null)
     * @method Show\Field|Collection autoBtn(string $label = null)
     * @method Show\Field|Collection time(string $label = null)
     * @method Show\Field|Collection source(string $label = null)
     * @method Show\Field|Collection confirm(string $label = null)
     * @method Show\Field|Collection announceTime(string $label = null)
     * @method Show\Field|Collection acceptTime(string $label = null)
     * @method Show\Field|Collection IDNumber(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection bankAccount(string $label = null)
     * @method Show\Field|Collection bankCode(string $label = null)
     * @method Show\Field|Collection bfID(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection memberID(string $label = null)
     * @method Show\Field|Collection total(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection reason(string $label = null)
     * @method Show\Field|Collection useBonus(string $label = null)
     * @method Show\Field|Collection purchasePrice(string $label = null)
     * @method Show\Field|Collection changeID(string $label = null)
     * @method Show\Field|Collection cost(string $label = null)
     * @method Show\Field|Collection function(string $label = null)
     * @method Show\Field|Collection inTime(string $label = null)
     * @method Show\Field|Collection finTime(string $label = null)
     * @method Show\Field|Collection reportTime(string $label = null)
     * @method Show\Field|Collection reporter(string $label = null)
     * @method Show\Field|Collection operation(string $label = null)
     * @method Show\Field|Collection expected(string $label = null)
     * @method Show\Field|Collection fixtime(string $label = null)
     * @method Show\Field|Collection CSID(string $label = null)
     * @method Show\Field|Collection CSsize(string $label = null)
     * @method Show\Field|Collection timeStamp(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection MIN(string $label = null)
     * @method Show\Field|Collection MOUT(string $label = null)
     * @method Show\Field|Collection credit(string $label = null)
     * @method Show\Field|Collection note(string $label = null)
     * @method Show\Field|Collection aid(string $label = null)
     * @method Show\Field|Collection cashType(string $label = null)
     * @method Show\Field|Collection outputItem(string $label = null)
     * @method Show\Field|Collection rank(string $label = null)
     * @method Show\Field|Collection creditType(string $label = null)
     * @method Show\Field|Collection checkIN(string $label = null)
     * @method Show\Field|Collection checkOut(string $label = null)
     * @method Show\Field|Collection people(string $label = null)
     * @method Show\Field|Collection checkWay(string $label = null)
     * @method Show\Field|Collection target(string $label = null)
     * @method Show\Field|Collection joinComment(string $label = null)
     * @method Show\Field|Collection outComment(string $label = null)
     * @method Show\Field|Collection deadline(string $label = null)
     * @method Show\Field|Collection deadTime(string $label = null)
     * @method Show\Field|Collection collectID(string $label = null)
     * @method Show\Field|Collection lowNum(string $label = null)
     * @method Show\Field|Collection deletetoken(string $label = null)
     * @method Show\Field|Collection realNum(string $label = null)
     * @method Show\Field|Collection shipmentID(string $label = null)
     * @method Show\Field|Collection backID(string $label = null)
     * @method Show\Field|Collection sellNum(string $label = null)
     * @method Show\Field|Collection nowNum(string $label = null)
     * @method Show\Field|Collection consignmentNum(string $label = null)
     * @method Show\Field|Collection ok(string $label = null)
     * @method Show\Field|Collection latitude(string $label = null)
     * @method Show\Field|Collection longitude(string $label = null)
     * @method Show\Field|Collection csOrderID(string $label = null)
     * @method Show\Field|Collection csOrderNum(string $label = null)
     * @method Show\Field|Collection orderTime(string $label = null)
     * @method Show\Field|Collection usage(string $label = null)
     * @method Show\Field|Collection cargoStatus(string $label = null)
     * @method Show\Field|Collection cashStatus(string $label = null)
     * @method Show\Field|Collection cargoTime(string $label = null)
     * @method Show\Field|Collection cashInTime(string $label = null)
     * @method Show\Field|Collection discount(string $label = null)
     * @method Show\Field|Collection outDate(string $label = null)
     * @method Show\Field|Collection deleteToken(string $label = null)
     * @method Show\Field|Collection deleteName(string $label = null)
     * @method Show\Field|Collection emailNotify(string $label = null)
     * @method Show\Field|Collection phoneNotify(string $label = null)
     * @method Show\Field|Collection sellPrice(string $label = null)
     * @method Show\Field|Collection shipWay(string $label = null)
     * @method Show\Field|Collection backNum(string $label = null)
     * @method Show\Field|Collection display(string $label = null)
     * @method Show\Field|Collection ECID(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection platformID(string $label = null)
     * @method Show\Field|Collection ECOrderNum(string $label = null)
     * @method Show\Field|Collection ECstatus(string $label = null)
     * @method Show\Field|Collection orderID(string $label = null)
     * @method Show\Field|Collection updateTime(string $label = null)
     * @method Show\Field|Collection transportID(string $label = null)
     * @method Show\Field|Collection trackingNumber(string $label = null)
     * @method Show\Field|Collection invoiceID(string $label = null)
     * @method Show\Field|Collection charge(string $label = null)
     * @method Show\Field|Collection receiverName(string $label = null)
     * @method Show\Field|Collection receiverPhone(string $label = null)
     * @method Show\Field|Collection receiverAddress(string $label = null)
     * @method Show\Field|Collection payway(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection comID(string $label = null)
     * @method Show\Field|Collection CarrierType(string $label = null)
     * @method Show\Field|Collection CarrierId1(string $label = null)
     * @method Show\Field|Collection NPOBAN(string $label = null)
     * @method Show\Field|Collection boxTime(string $label = null)
     * @method Show\Field|Collection finishTime(string $label = null)
     * @method Show\Field|Collection boxNum(string $label = null)
     * @method Show\Field|Collection sendingTime(string $label = null)
     * @method Show\Field|Collection platFormID(string $label = null)
     * @method Show\Field|Collection platformName(string $label = null)
     * @method Show\Field|Collection period(string $label = null)
     * @method Show\Field|Collection InvoiceNum(string $label = null)
     * @method Show\Field|Collection InoviceDateTime(string $label = null)
     * @method Show\Field|Collection InvoiceCode(string $label = null)
     * @method Show\Field|Collection InvoiceNumber(string $label = null)
     * @method Show\Field|Collection RandomNumber(string $label = null)
     * @method Show\Field|Collection BuyerIdentifier(string $label = null)
     * @method Show\Field|Collection SellerIdentifier(string $label = null)
     * @method Show\Field|Collection shopName(string $label = null)
     * @method Show\Field|Collection orderNum(string $label = null)
     * @method Show\Field|Collection DonateMark(string $label = null)
     * @method Show\Field|Collection CarrierId2(string $label = null)
     * @method Show\Field|Collection PrintMark(string $label = null)
     * @method Show\Field|Collection depID(string $label = null)
     * @method Show\Field|Collection productDetail(string $label = null)
     * @method Show\Field|Collection invoiceType(string $label = null)
     * @method Show\Field|Collection xmlout(string $label = null)
     * @method Show\Field|Collection xmlOutTime(string $label = null)
     * @method Show\Field|Collection invalid(string $label = null)
     * @method Show\Field|Collection void(string $label = null)
     * @method Show\Field|Collection AllowanceNumber(string $label = null)
     * @method Show\Field|Collection AllowanceDateTime(string $label = null)
     * @method Show\Field|Collection BuyerName(string $label = null)
     * @method Show\Field|Collection BuyerAddress(string $label = null)
     * @method Show\Field|Collection BuyerPersonInCharge(string $label = null)
     * @method Show\Field|Collection BuyerTelephoneNumber(string $label = null)
     * @method Show\Field|Collection BuyerFacsimileNumber(string $label = null)
     * @method Show\Field|Collection BuyerEmailAddress(string $label = null)
     * @method Show\Field|Collection BuyerCustomerNumber(string $label = null)
     * @method Show\Field|Collection BuyerRoleRemark(string $label = null)
     * @method Show\Field|Collection SellerName(string $label = null)
     * @method Show\Field|Collection SellerAddress(string $label = null)
     * @method Show\Field|Collection SellerPersonInCharge(string $label = null)
     * @method Show\Field|Collection SellerTelephoneNumber(string $label = null)
     * @method Show\Field|Collection SellerFacsimileNumber(string $label = null)
     * @method Show\Field|Collection SellerEmailAddress(string $label = null)
     * @method Show\Field|Collection SellerCustomerNumber(string $label = null)
     * @method Show\Field|Collection SellerRoleRemark(string $label = null)
     * @method Show\Field|Collection Attachment(string $label = null)
     * @method Show\Field|Collection TaxAmount(string $label = null)
     * @method Show\Field|Collection TotalAmount(string $label = null)
     * @method Show\Field|Collection xmlOut(string $label = null)
     * @method Show\Field|Collection CancelDateTime(string $label = null)
     * @method Show\Field|Collection CancelReason(string $label = null)
     * @method Show\Field|Collection Remark(string $label = null)
     * @method Show\Field|Collection InvoiceDateTime(string $label = null)
     * @method Show\Field|Collection ReturnTaxDocumentNumber(string $label = null)
     * @method Show\Field|Collection ReceiveDateTime(string $label = null)
     * @method Show\Field|Collection BuyerRemark(string $label = null)
     * @method Show\Field|Collection timeChanger(string $label = null)
     * @method Show\Field|Collection RejectInvoiceNumber(string $label = null)
     * @method Show\Field|Collection RejectDateTime(string $label = null)
     * @method Show\Field|Collection RejectReason(string $label = null)
     * @method Show\Field|Collection YearMonth(string $label = null)
     * @method Show\Field|Collection InvoiceTrack(string $label = null)
     * @method Show\Field|Collection InvoiceBeginNo(string $label = null)
     * @method Show\Field|Collection InvoiceEndNo(string $label = null)
     * @method Show\Field|Collection InvoiceNext(string $label = null)
     * @method Show\Field|Collection VoidDateTime(string $label = null)
     * @method Show\Field|Collection VoidReason(string $label = null)
     * @method Show\Field|Collection sending(string $label = null)
     * @method Show\Field|Collection memo(string $label = null)
     * @method Show\Field|Collection subject(string $label = null)
     * @method Show\Field|Collection signature(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection fromAge(string $label = null)
     * @method Show\Field|Collection toAge(string $label = null)
     * @method Show\Field|Collection sendTime(string $label = null)
     * @method Show\Field|Collection headers(string $label = null)
     * @method Show\Field|Collection emailList(string $label = null)
     * @method Show\Field|Collection functionID(string $label = null)
     * @method Show\Field|Collection accountID(string $label = null)
     * @method Show\Field|Collection eID(string $label = null)
     * @method Show\Field|Collection priority(string $label = null)
     * @method Show\Field|Collection err(string $label = null)
     * @method Show\Field|Collection receiverNum(string $label = null)
     * @method Show\Field|Collection point(string $label = null)
     * @method Show\Field|Collection msg(string $label = null)
     * @method Show\Field|Collection data(string $label = null)
     * @method Show\Field|Collection rentID(string $label = null)
     * @method Show\Field|Collection times(string $label = null)
     * @method Show\Field|Collection termID(string $label = null)
     * @method Show\Field|Collection mainNum(string $label = null)
     * @method Show\Field|Collection IP(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection runTime(string $label = null)
     * @method Show\Field|Collection purchaseID(string $label = null)
     * @method Show\Field|Collection core(string $label = null)
     * @method Show\Field|Collection six(string $label = null)
     * @method Show\Field|Collection from(string $label = null)
     * @method Show\Field|Collection to(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection check_shopID(string $label = null)
     * @method Show\Field|Collection checked_at(string $label = null)
     * @method Show\Field|Collection checked(string $label = null)
     * @method Show\Field|Collection blackcont(string $label = null)
     * @method Show\Field|Collection blackToken(string $label = null)
     * @method Show\Field|Collection bonusStatus(string $label = null)
     * @method Show\Field|Collection consumStatus(string $label = null)
     * @method Show\Field|Collection levelID(string $label = null)
     * @method Show\Field|Collection levelName(string $label = null)
     * @method Show\Field|Collection barcode(string $label = null)
     * @method Show\Field|Collection bonus(string $label = null)
     * @method Show\Field|Collection rentLimit(string $label = null)
     * @method Show\Field|Collection consumption(string $label = null)
     * @method Show\Field|Collection msgID(string $label = null)
     * @method Show\Field|Collection fromShopID(string $label = null)
     * @method Show\Field|Collection fromAccount(string $label = null)
     * @method Show\Field|Collection fromAid(string $label = null)
     * @method Show\Field|Collection toAid(string $label = null)
     * @method Show\Field|Collection toAccount(string $label = null)
     * @method Show\Field|Collection createTime(string $label = null)
     * @method Show\Field|Collection buyNum(string $label = null)
     * @method Show\Field|Collection isConsignment(string $label = null)
     * @method Show\Field|Collection applyDelete(string $label = null)
     * @method Show\Field|Collection shippingDate(string $label = null)
     * @method Show\Field|Collection rowID(string $label = null)
     * @method Show\Field|Collection addressID(string $label = null)
     * @method Show\Field|Collection eachCost(string $label = null)
     * @method Show\Field|Collection sProductID(string $label = null)
     * @method Show\Field|Collection payType(string $label = null)
     * @method Show\Field|Collection sellID(string $label = null)
     * @method Show\Field|Collection isOnline(string $label = null)
     * @method Show\Field|Collection awardToken(string $label = null)
     * @method Show\Field|Collection profit(string $label = null)
     * @method Show\Field|Collection isNew(string $label = null)
     * @method Show\Field|Collection diff(string $label = null)
     * @method Show\Field|Collection finalTotal(string $label = null)
     * @method Show\Field|Collection fee(string $label = null)
     * @method Show\Field|Collection webPay(string $label = null)
     * @method Show\Field|Collection creditFee(string $label = null)
     * @method Show\Field|Collection subTotal(string $label = null)
     * @method Show\Field|Collection shippingTime(string $label = null)
     * @method Show\Field|Collection orderComment(string $label = null)
     * @method Show\Field|Collection makeInvoice(string $label = null)
     * @method Show\Field|Collection receiver(string $label = null)
     * @method Show\Field|Collection defaultToken(string $label = null)
     * @method Show\Field|Collection destinationShopID(string $label = null)
     * @method Show\Field|Collection shippingFee(string $label = null)
     * @method Show\Field|Collection adjustWay(string $label = null)
     * @method Show\Field|Collection adjustToken(string $label = null)
     * @method Show\Field|Collection adjustFlag(string $label = null)
     * @method Show\Field|Collection adjustID(string $label = null)
     * @method Show\Field|Collection requestTime(string $label = null)
     * @method Show\Field|Collection backTime(string $label = null)
     * @method Show\Field|Collection backToken(string $label = null)
     * @method Show\Field|Collection backFlag(string $label = null)
     * @method Show\Field|Collection receiverTime(string $label = null)
     * @method Show\Field|Collection distributeName(string $label = null)
     * @method Show\Field|Collection upDiscount(string $label = null)
     * @method Show\Field|Collection yearmonth(string $label = null)
     * @method Show\Field|Collection distributeType(string $label = null)
     * @method Show\Field|Collection shipmentCode(string $label = null)
     * @method Show\Field|Collection shippingNum(string $label = null)
     * @method Show\Field|Collection shipmentComment(string $label = null)
     * @method Show\Field|Collection arriveTime(string $label = null)
     * @method Show\Field|Collection shipmentFee(string $label = null)
     * @method Show\Field|Collection invoiceDetail(string $label = null)
     * @method Show\Field|Collection hidePrice(string $label = null)
     * @method Show\Field|Collection assignDate(string $label = null)
     * @method Show\Field|Collection assignT(string $label = null)
     * @method Show\Field|Collection tcgTotal(string $label = null)
     * @method Show\Field|Collection sendKY(string $label = null)
     * @method Show\Field|Collection money(string $label = null)
     * @method Show\Field|Collection bsetDiscount(string $label = null)
     * @method Show\Field|Collection best30(string $label = null)
     * @method Show\Field|Collection targetStart(string $label = null)
     * @method Show\Field|Collection targetEnd(string $label = null)
     * @method Show\Field|Collection onYear(string $label = null)
     * @method Show\Field|Collection upbonus(string $label = null)
     * @method Show\Field|Collection bonusDiff(string $label = null)
     * @method Show\Field|Collection boxProductID(string $label = null)
     * @method Show\Field|Collection unitProductID(string $label = null)
     * @method Show\Field|Collection unitToBox(string $label = null)
     * @method Show\Field|Collection birthday(string $label = null)
     * @method Show\Field|Collection joinTime(string $label = null)
     * @method Show\Field|Collection myBonus(string $label = null)
     * @method Show\Field|Collection adblock(string $label = null)
     * @method Show\Field|Collection PFID(string $label = null)
     * @method Show\Field|Collection productStr(string $label = null)
     * @method Show\Field|Collection packingNum(string $label = null)
     * @method Show\Field|Collection parentID(string $label = null)
     * @method Show\Field|Collection ZHName(string $label = null)
     * @method Show\Field|Collection ENGName(string $label = null)
     * @method Show\Field|Collection language(string $label = null)
     * @method Show\Field|Collection minDiscount(string $label = null)
     * @method Show\Field|Collection minPeople(string $label = null)
     * @method Show\Field|Collection maxPeople(string $label = null)
     * @method Show\Field|Collection age(string $label = null)
     * @method Show\Field|Collection suppliers(string $label = null)
     * @method Show\Field|Collection category(string $label = null)
     * @method Show\Field|Collection productNum(string $label = null)
     * @method Show\Field|Collection buyPrice(string $label = null)
     * @method Show\Field|Collection buyDiscount(string $label = null)
     * @method Show\Field|Collection openStatus(string $label = null)
     * @method Show\Field|Collection publisher(string $label = null)
     * @method Show\Field|Collection phaBid(string $label = null)
     * @method Show\Field|Collection bidExist(string $label = null)
     * @method Show\Field|Collection cardSleeve(string $label = null)
     * @method Show\Field|Collection flowRate(string $label = null)
     * @method Show\Field|Collection flowNum(string $label = null)
     * @method Show\Field|Collection nonInvoice(string $label = null)
     * @method Show\Field|Collection nonJoinPurchaceDiscount(string $label = null)
     * @method Show\Field|Collection rule(string $label = null)
     * @method Show\Field|Collection limitNum(string $label = null)
     * @method Show\Field|Collection nonBonus(string $label = null)
     * @method Show\Field|Collection case(string $label = null)
     * @method Show\Field|Collection recent(string $label = null)
     * @method Show\Field|Collection cabinet(string $label = null)
     * @method Show\Field|Collection hide(string $label = null)
     * @method Show\Field|Collection sellAmount(string $label = null)
     * @method Show\Field|Collection Sconsignment(string $label = null)
     * @method Show\Field|Collection patch(string $label = null)
     * @method Show\Field|Collection ig(string $label = null)
     * @method Show\Field|Collection igBreak(string $label = null)
     * @method Show\Field|Collection length(string $label = null)
     * @method Show\Field|Collection width(string $label = null)
     * @method Show\Field|Collection height(string $label = null)
     * @method Show\Field|Collection weight(string $label = null)
     * @method Show\Field|Collection orgNum(string $label = null)
     * @method Show\Field|Collection resultNum(string $label = null)
     * @method Show\Field|Collection post(string $label = null)
     * @method Show\Field|Collection pID(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection startConsignment(string $label = null)
     * @method Show\Field|Collection supplierID(string $label = null)
     * @method Show\Field|Collection ky(string $label = null)
     * @method Show\Field|Collection phantasia(string $label = null)
     * @method Show\Field|Collection stockNum(string $label = null)
     * @method Show\Field|Collection checkNum(string $label = null)
     * @method Show\Field|Collection preTime(string $label = null)
     * @method Show\Field|Collection purchaseTotal(string $label = null)
     * @method Show\Field|Collection accountTime(string $label = null)
     * @method Show\Field|Collection shareFee(string $label = null)
     * @method Show\Field|Collection tax(string $label = null)
     * @method Show\Field|Collection typeID(string $label = null)
     * @method Show\Field|Collection typeOrder(string $label = null)
     * @method Show\Field|Collection limitAmount(string $label = null)
     * @method Show\Field|Collection used(string $label = null)
     * @method Show\Field|Collection key(string $label = null)
     * @method Show\Field|Collection val(string $label = null)
     * @method Show\Field|Collection sql(string $label = null)
     * @method Show\Field|Collection rentTime(string $label = null)
     * @method Show\Field|Collection return(string $label = null)
     * @method Show\Field|Collection table(string $label = null)
     * @method Show\Field|Collection dir(string $label = null)
     * @method Show\Field|Collection index(string $label = null)
     * @method Show\Field|Collection userID(string $label = null)
     * @method Show\Field|Collection sanguoshaID(string $label = null)
     * @method Show\Field|Collection delete(string $label = null)
     * @method Show\Field|Collection text(string $label = null)
     * @method Show\Field|Collection dueTime(string $label = null)
     * @method Show\Field|Collection reNew(string $label = null)
     * @method Show\Field|Collection end_at(string $label = null)
     * @method Show\Field|Collection start_at(string $label = null)
     * @method Show\Field|Collection sp_order_id(string $label = null)
     * @method Show\Field|Collection errno(string $label = null)
     * @method Show\Field|Collection correctTime(string $label = null)
     * @method Show\Field|Collection licenceCode(string $label = null)
     * @method Show\Field|Collection dirtyBit(string $label = null)
     * @method Show\Field|Collection lastUpdate(string $label = null)
     * @method Show\Field|Collection buffering(string $label = null)
     * @method Show\Field|Collection offset(string $label = null)
     * @method Show\Field|Collection consignmentStatus(string $label = null)
     * @method Show\Field|Collection shipmentStatus(string $label = null)
     * @method Show\Field|Collection handShake(string $label = null)
     * @method Show\Field|Collection handShakeSign(string $label = null)
     * @method Show\Field|Collection jointype(string $label = null)
     * @method Show\Field|Collection shipOut(string $label = null)
     * @method Show\Field|Collection lastBuffer(string $label = null)
     * @method Show\Field|Collection fireData(string $label = null)
     * @method Show\Field|Collection tableNum(string $label = null)
     * @method Show\Field|Collection holiday(string $label = null)
     * @method Show\Field|Collection showPrice(string $label = null)
     * @method Show\Field|Collection shopLogin(string $label = null)
     * @method Show\Field|Collection contactPerson(string $label = null)
     * @method Show\Field|Collection fax(string $label = null)
     * @method Show\Field|Collection invoiceByShip(string $label = null)
     * @method Show\Field|Collection shipComment(string $label = null)
     * @method Show\Field|Collection assignTime(string $label = null)
     * @method Show\Field|Collection shipInterval(string $label = null)
     * @method Show\Field|Collection percent(string $label = null)
     * @method Show\Field|Collection safeCon(string $label = null)
     * @method Show\Field|Collection stockCon(string $label = null)
     * @method Show\Field|Collection lowerNum(string $label = null)
     * @method Show\Field|Collection autoOrder(string $label = null)
     * @method Show\Field|Collection suitID(string $label = null)
     * @method Show\Field|Collection mainProductID(string $label = null)
     * @method Show\Field|Collection snum(string $label = null)
     * @method Show\Field|Collection invoiceWay(string $label = null)
     * @method Show\Field|Collection contact(string $label = null)
     * @method Show\Field|Collection setting(string $label = null)
     * @method Show\Field|Collection temp(string $label = null)
     * @method Show\Field|Collection keyValue(string $label = null)
     * @method Show\Field|Collection indexValue(string $label = null)
     * @method Show\Field|Collection term(string $label = null)
     * @method Show\Field|Collection creatTime(string $label = null)
     * @method Show\Field|Collection estimateTime(string $label = null)
     * @method Show\Field|Collection startTime(string $label = null)
     * @method Show\Field|Collection endTime(string $label = null)
     * @method Show\Field|Collection top10(string $label = null)
     * @method Show\Field|Collection transportNameID(string $label = null)
     * @method Show\Field|Collection transportName(string $label = null)
     * @method Show\Field|Collection csorderID(string $label = null)
     * @method Show\Field|Collection datatransfer(string $label = null)
     * @method Show\Field|Collection buyID(string $label = null)
     * @method Show\Field|Collection BuyName(string $label = null)
     * @method Show\Field|Collection postNum(string $label = null)
     * @method Show\Field|Collection counntry(string $label = null)
     * @method Show\Field|Collection optionID(string $label = null)
     * @method Show\Field|Collection sendCombine(string $label = null)
     * @method Show\Field|Collection V(string $label = null)
     * @method Show\Field|Collection cool(string $label = null)
     * @method Show\Field|Collection card(string $label = null)
     * @method Show\Field|Collection cat(string $label = null)
     * @method Show\Field|Collection special(string $label = null)
     * @method Show\Field|Collection addressErr(string $label = null)
     * @method Show\Field|Collection transportRemarks(string $label = null)
     * @method Show\Field|Collection packageNumber(string $label = null)
     * @method Show\Field|Collection invoiceNumber(string $label = null)
     * @method Show\Field|Collection sub_code(string $label = null)
     * @method Show\Field|Collection borrow(string $label = null)
     * @method Show\Field|Collection loan(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
