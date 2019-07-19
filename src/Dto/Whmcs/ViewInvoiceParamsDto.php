<?php

namespace Indicio\Foundation\Dto\Whmcs;

/**

 * @property-read string $displayTitle
 * @property-read string $tagLine
 * @property-read string $type
 * @property-read string $textCenter
 * @property-read string $hide
 * @property-read string $additionalClasses
 * @property-read string $idName
 * @property-read string $errorsHTML
 * @property-read string $title
 * @property-read string $msg
 * @property-read string $desc
 * @property-read string $errormessage
 * @property-read string $livehelpjs
 * @property-read string $setLanguage
 * @property-read array $languages
 * @property-read array $locales
 * @property-read array $activeLocale
 * @property-read object $carbon
 * @property-read boolean $showBreadcrumb
 * @property-read boolean $showingLoginPage
 * @property-read boolean $incorrect
 * @property-read array $kbarticle
 * @property-read string $template
 * @property-read string $language
 * @property-read string $companyName
 * @property-read string $logo
 * @property-read string $charset
 * @property-read string $pagetitle
 * @property-read string $pageicon
 * @property-read string $filename
 * @property-read array $breadcrumb
 * @property-read string $breadcrumbnav
 * @property-read string $todaysdate
 * @property-read string $dateDay
 * @property-read string $dateMonth
 * @property-read string $dateYear
 * @property-read string $token
 * @property-read string $reCaptchaPublicKey
 * @property-read boolean $servedOverSsl
 * @property-read string $versionHash
 * @property-read string $systemurl
 * @property-read string $systemsslurl
 * @property-read string $systemNonSSLURL
 * @property-read string $WEB_ROOT
 * @property-read string $BASE_PATH_CSS
 * @property-read string $BASE_PATH_JS
 * @property-read string $BASE_PATH_FONTS
 * @property-read string $BASE_PATH_IMG
 * @property-read string $assetLogoPath
 * @property-read boolean $loggedin
 * @property-read NULL $client
 * @property-read array $clientsdetails
 * @property-read array $clientAlerts
 * @property-read array $clientsstats
 * @property-read array $loggedinuser
 * @property-read array $contactpermissions
 * @property-read boolean $emailVerificationPending
 * @property-read boolean $languageChange
 * @property-read boolean $languageChangeEnabled
 * @property-read string $currentpagelinkback
 * @property-read array $currencies
 * @property-read string $twitterusername
 * @property-read string $announcementsFbRecommend
 * @property-read array $condlinks
 * @property-read boolean $invalidInvoiceIdRequested
 * @property-read object $primaryNavbar
 * @property-read object $secondaryNavbar
 * @property-read object $primarySidebar
 * @property-read object $secondarySidebar
 * @property-read integer $id
 * @property-read integer $userId
 * @property-read integer $invoiceNumber
 * @property-read string $date
 * @property-read string $dueDate
 * @property-read string $datePaid
 * @property-read string $lastCaptureAttempt
 * @property-read object $subtotal
 * @property-read object $credit
 * @property-read object $tax
 * @property-read object $tax2
 * @property-read object $total
 * @property-read string $taxRate
 * @property-read string $taxRate2
 * @property-read string $status
 * @property-read string $paymentMethod
 * @property-read string $notes
 * @property-read object $balance
 * @property-read string $paymentGatewayName
 * @property-read integer $invoiceid
 * @property-read string $invoiceNumberOriginal
 * @property-read string $paymentModule
 * @property-read object $amountPaid
 * @property-read string $dateCreated
 * @property-read string $dateDue
 * @property-read array $customFields
 * @property-read string $taxName
 * @property-read string $taxName2
 * @property-read string $statuslocale
 * @property-read string $payto
 * @property-read NULL $subscrid
 * @property-read object $clienttotaldue
 * @property-read object $clientpreviousbalance
 * @property-read object $clientbalancedue
 * @property-read object $lastPaymentAmount
 * @property-read string $lastpaymenttransid
 * @property-read array $invoiceitems
 * @property-read array $transactions
 * @property-read string $paymentbutton
 * @property-read boolean $paymentSuccess
 * @property-read boolean $paymentFailed
 * @property-read boolean $pendingReview
 * @property-read boolean $offlineReview
 * @property-read boolean $offlinepaid
 * @property-read boolean $paymentSuccessAwaitingNotification
 * @property-read boolean $allowChangeGateway
 * @property-read string $gatewayDropdown
 * @property-read integer $cartitemcount
 * @property-read string $templateFile
 * @property-read boolean $adminLoggedIn
 * @property-read boolean $adminMasqueradingAsClient
*/
class ViewInvoiceParamsDto extends AbstractDto
{
    public function fieldMap()
    {
        return [
            'tagline' => 'tagLine',
            'textcenter' => 'textCenter',
            'additionalclasses' => 'additionalClasses',
            'setlanguage' => 'setLanguage',
            'showbreadcrumb' => 'showBreadcrumb',
            'langchange' => 'languageChange',
            'languagechangeenabled' => 'languageChangeEnabled',
            'idname' => 'idName',
            'errorshtml' => 'errorsHTML',
            'date_day' => 'dateDay',
            'date_month' => 'dateMonth',
            'date_year' => 'dateYear',
            'companyname' => 'companyName',
            'paymentmodule' => 'paymentModule',
            'duedate' => 'dueDate',
            'datepaid' => 'datePaid',
            'userid' => 'userId',
            'invoicenum' => 'invoiceNumber',
            'last_capture_attempt' => 'lastCaptureAttempt',
            'amountpaid' => 'amountPaid',
            'datecreated' => 'dateCreated',
            'datedue' => 'dateDue',
            'customfields' => 'customFields',
            'taxname' => 'taxName',
            'taxname2' => 'taxName2',
            'taxrate' => 'taxRate',
            'taxrate2' => 'taxRate2',
            'lastpaymentamount' => 'lastPaymentAmount',
            'templatefile' => 'templateFile',
            'invoicenumorig' => 'invoiceNumberOriginal',
            'paymentmethod' => 'paymentMethod',
            'gatewaydropdown' => 'gatewayDropdown',
            'allowchangegateway' => 'allowChangeGateway'
        ];
    }

    /**
     * @return string
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * @param string $displayTitle
     * @return ViewInvoiceParamsDto
     */
    public function setDisplayTitle($displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagLine()
    {
        return $this->tagLine;
    }

    /**
     * @param string $tagLine
     * @return ViewInvoiceParamsDto
     */
    public function setTagLine($tagLine)
    {
        $this->tagLine = $tagLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ViewInvoiceParamsDto
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextCenter()
    {
        return $this->textCenter;
    }

    /**
     * @param string $textCenter
     * @return ViewInvoiceParamsDto
     */
    public function setTextCenter($textCenter)
    {
        $this->textCenter = $textCenter;
        return $this;
    }

    /**
     * @return string
     */
    public function getHide()
    {
        return $this->hide;
    }

    /**
     * @param string $hide
     * @return ViewInvoiceParamsDto
     */
    public function setHide($hide)
    {
        $this->hide = $hide;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalClasses()
    {
        return $this->additionalClasses;
    }

    /**
     * @param string $additionalClasses
     * @return ViewInvoiceParamsDto
     */
    public function setAdditionalClasses($additionalClasses)
    {
        $this->additionalClasses = $additionalClasses;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdName()
    {
        return $this->idName;
    }

    /**
     * @param string $idName
     * @return ViewInvoiceParamsDto
     */
    public function setIdName($idName)
    {
        $this->idName = $idName;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorsHTML()
    {
        return $this->errorsHTML;
    }

    /**
     * @param string $errorsHTML
     * @return ViewInvoiceParamsDto
     */
    public function setErrorsHTML($errorsHTML)
    {
        $this->errorsHTML = $errorsHTML;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ViewInvoiceParamsDto
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     * @return ViewInvoiceParamsDto
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return ViewInvoiceParamsDto
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrormessage()
    {
        return $this->errormessage;
    }

    /**
     * @param string $errormessage
     * @return ViewInvoiceParamsDto
     */
    public function setErrormessage($errormessage)
    {
        $this->errormessage = $errormessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getLivehelpjs()
    {
        return $this->livehelpjs;
    }

    /**
     * @param string $livehelpjs
     * @return ViewInvoiceParamsDto
     */
    public function setLivehelpjs($livehelpjs)
    {
        $this->livehelpjs = $livehelpjs;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetLanguage()
    {
        return $this->setLanguage;
    }

    /**
     * @param string $setLanguage
     * @return ViewInvoiceParamsDto
     */
    public function setSetLanguage($setLanguage)
    {
        $this->setLanguage = $setLanguage;
        return $this;
    }

    /**
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param array $languages
     * @return ViewInvoiceParamsDto
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
        return $this;
    }

    /**
     * @return array
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * @param array $locales
     * @return ViewInvoiceParamsDto
     */
    public function setLocales($locales)
    {
        $this->locales = $locales;
        return $this;
    }

    /**
     * @return array
     */
    public function getActiveLocale()
    {
        return $this->activeLocale;
    }

    /**
     * @param array $activeLocale
     * @return ViewInvoiceParamsDto
     */
    public function setActiveLocale($activeLocale)
    {
        $this->activeLocale = $activeLocale;
        return $this;
    }

    /**
     * @return object
     */
    public function getCarbon()
    {
        return $this->carbon;
    }

    /**
     * @param object $carbon
     * @return ViewInvoiceParamsDto
     */
    public function setCarbon($carbon)
    {
        $this->carbon = $carbon;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowBreadcrumb()
    {
        return $this->showBreadcrumb;
    }

    /**
     * @param bool $showBreadcrumb
     * @return ViewInvoiceParamsDto
     */
    public function setShowBreadcrumb($showBreadcrumb)
    {
        $this->showBreadcrumb = $showBreadcrumb;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowingLoginPage()
    {
        return $this->showingLoginPage;
    }

    /**
     * @param bool $showingLoginPage
     * @return ViewInvoiceParamsDto
     */
    public function setShowingLoginPage($showingLoginPage)
    {
        $this->showingLoginPage = $showingLoginPage;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncorrect()
    {
        return $this->incorrect;
    }

    /**
     * @param bool $incorrect
     * @return ViewInvoiceParamsDto
     */
    public function setIncorrect($incorrect)
    {
        $this->incorrect = $incorrect;
        return $this;
    }

    /**
     * @return array
     */
    public function getKbarticle()
    {
        return $this->kbarticle;
    }

    /**
     * @param array $kbarticle
     * @return ViewInvoiceParamsDto
     */
    public function setKbarticle($kbarticle)
    {
        $this->kbarticle = $kbarticle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return ViewInvoiceParamsDto
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return ViewInvoiceParamsDto
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return ViewInvoiceParamsDto
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return ViewInvoiceParamsDto
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     * @return ViewInvoiceParamsDto
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * @return string
     */
    public function getPagetitle()
    {
        return $this->pagetitle;
    }

    /**
     * @param string $pagetitle
     * @return ViewInvoiceParamsDto
     */
    public function setPagetitle($pagetitle)
    {
        $this->pagetitle = $pagetitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageicon()
    {
        return $this->pageicon;
    }

    /**
     * @param string $pageicon
     * @return ViewInvoiceParamsDto
     */
    public function setPageicon($pageicon)
    {
        $this->pageicon = $pageicon;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return ViewInvoiceParamsDto
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return array
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * @param array $breadcrumb
     * @return ViewInvoiceParamsDto
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        return $this;
    }

    /**
     * @return string
     */
    public function getBreadcrumbnav()
    {
        return $this->breadcrumbnav;
    }

    /**
     * @param string $breadcrumbnav
     * @return ViewInvoiceParamsDto
     */
    public function setBreadcrumbnav($breadcrumbnav)
    {
        $this->breadcrumbnav = $breadcrumbnav;
        return $this;
    }

    /**
     * @return string
     */
    public function getTodaysdate()
    {
        return $this->todaysdate;
    }

    /**
     * @param string $todaysdate
     * @return ViewInvoiceParamsDto
     */
    public function setTodaysdate($todaysdate)
    {
        $this->todaysdate = $todaysdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateDay()
    {
        return $this->dateDay;
    }

    /**
     * @param string $dateDay
     * @return ViewInvoiceParamsDto
     */
    public function setDateDay($dateDay)
    {
        $this->dateDay = $dateDay;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateMonth()
    {
        return $this->dateMonth;
    }

    /**
     * @param string $dateMonth
     * @return ViewInvoiceParamsDto
     */
    public function setDateMonth($dateMonth)
    {
        $this->dateMonth = $dateMonth;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateYear()
    {
        return $this->dateYear;
    }

    /**
     * @param string $dateYear
     * @return ViewInvoiceParamsDto
     */
    public function setDateYear($dateYear)
    {
        $this->dateYear = $dateYear;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return ViewInvoiceParamsDto
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getReCaptchaPublicKey()
    {
        return $this->reCaptchaPublicKey;
    }

    /**
     * @param string $reCaptchaPublicKey
     * @return ViewInvoiceParamsDto
     */
    public function setReCaptchaPublicKey($reCaptchaPublicKey)
    {
        $this->reCaptchaPublicKey = $reCaptchaPublicKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isServedOverSsl()
    {
        return $this->servedOverSsl;
    }

    /**
     * @param bool $servedOverSsl
     * @return ViewInvoiceParamsDto
     */
    public function setServedOverSsl($servedOverSsl)
    {
        $this->servedOverSsl = $servedOverSsl;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersionHash()
    {
        return $this->versionHash;
    }

    /**
     * @param string $versionHash
     * @return ViewInvoiceParamsDto
     */
    public function setVersionHash($versionHash)
    {
        $this->versionHash = $versionHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getSystemurl()
    {
        return $this->systemurl;
    }

    /**
     * @param string $systemurl
     * @return ViewInvoiceParamsDto
     */
    public function setSystemurl($systemurl)
    {
        $this->systemurl = $systemurl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSystemsslurl()
    {
        return $this->systemsslurl;
    }

    /**
     * @param string $systemsslurl
     * @return ViewInvoiceParamsDto
     */
    public function setSystemsslurl($systemsslurl)
    {
        $this->systemsslurl = $systemsslurl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSystemNonSSLURL()
    {
        return $this->systemNonSSLURL;
    }

    /**
     * @param string $systemNonSSLURL
     * @return ViewInvoiceParamsDto
     */
    public function setSystemNonSSLURL($systemNonSSLURL)
    {
        $this->systemNonSSLURL = $systemNonSSLURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getWEBROOT()
    {
        return $this->WEB_ROOT;
    }

    /**
     * @param string $WEB_ROOT
     * @return ViewInvoiceParamsDto
     */
    public function setWEBROOT($WEB_ROOT)
    {
        $this->WEB_ROOT = $WEB_ROOT;
        return $this;
    }

    /**
     * @return string
     */
    public function getBASEPATHCSS()
    {
        return $this->BASE_PATH_CSS;
    }

    /**
     * @param string $BASE_PATH_CSS
     * @return ViewInvoiceParamsDto
     */
    public function setBASEPATHCSS($BASE_PATH_CSS)
    {
        $this->BASE_PATH_CSS = $BASE_PATH_CSS;
        return $this;
    }

    /**
     * @return string
     */
    public function getBASEPATHJS()
    {
        return $this->BASE_PATH_JS;
    }

    /**
     * @param string $BASE_PATH_JS
     * @return ViewInvoiceParamsDto
     */
    public function setBASEPATHJS($BASE_PATH_JS)
    {
        $this->BASE_PATH_JS = $BASE_PATH_JS;
        return $this;
    }

    /**
     * @return string
     */
    public function getBASEPATHFONTS()
    {
        return $this->BASE_PATH_FONTS;
    }

    /**
     * @param string $BASE_PATH_FONTS
     * @return ViewInvoiceParamsDto
     */
    public function setBASEPATHFONTS($BASE_PATH_FONTS)
    {
        $this->BASE_PATH_FONTS = $BASE_PATH_FONTS;
        return $this;
    }

    /**
     * @return string
     */
    public function getBASEPATHIMG()
    {
        return $this->BASE_PATH_IMG;
    }

    /**
     * @param string $BASE_PATH_IMG
     * @return ViewInvoiceParamsDto
     */
    public function setBASEPATHIMG($BASE_PATH_IMG)
    {
        $this->BASE_PATH_IMG = $BASE_PATH_IMG;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssetLogoPath()
    {
        return $this->assetLogoPath;
    }

    /**
     * @param string $assetLogoPath
     * @return ViewInvoiceParamsDto
     */
    public function setAssetLogoPath($assetLogoPath)
    {
        $this->assetLogoPath = $assetLogoPath;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLoggedin()
    {
        return $this->loggedin;
    }

    /**
     * @param bool $loggedin
     * @return ViewInvoiceParamsDto
     */
    public function setLoggedin($loggedin)
    {
        $this->loggedin = $loggedin;
        return $this;
    }

    /**
     * @return NULL
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param NULL $client
     * @return ViewInvoiceParamsDto
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return array
     */
    public function getClientsdetails()
    {
        return $this->clientsdetails;
    }

    /**
     * @param array $clientsdetails
     * @return ViewInvoiceParamsDto
     */
    public function setClientsdetails($clientsdetails)
    {
        $this->clientsdetails = $clientsdetails;
        return $this;
    }

    /**
     * @return array
     */
    public function getClientAlerts()
    {
        return $this->clientAlerts;
    }

    /**
     * @param array $clientAlerts
     * @return ViewInvoiceParamsDto
     */
    public function setClientAlerts($clientAlerts)
    {
        $this->clientAlerts = $clientAlerts;
        return $this;
    }

    /**
     * @return array
     */
    public function getClientsstats()
    {
        return $this->clientsstats;
    }

    /**
     * @param array $clientsstats
     * @return ViewInvoiceParamsDto
     */
    public function setClientsstats($clientsstats)
    {
        $this->clientsstats = $clientsstats;
        return $this;
    }

    /**
     * @return array
     */
    public function getLoggedinuser()
    {
        return $this->loggedinuser;
    }

    /**
     * @param array $loggedinuser
     * @return ViewInvoiceParamsDto
     */
    public function setLoggedinuser($loggedinuser)
    {
        $this->loggedinuser = $loggedinuser;
        return $this;
    }

    /**
     * @return array
     */
    public function getContactpermissions()
    {
        return $this->contactpermissions;
    }

    /**
     * @param array $contactpermissions
     * @return ViewInvoiceParamsDto
     */
    public function setContactpermissions($contactpermissions)
    {
        $this->contactpermissions = $contactpermissions;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmailVerificationPending()
    {
        return $this->emailVerificationPending;
    }

    /**
     * @param bool $emailVerificationPending
     * @return ViewInvoiceParamsDto
     */
    public function setEmailVerificationPending($emailVerificationPending)
    {
        $this->emailVerificationPending = $emailVerificationPending;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLanguageChange()
    {
        return $this->languageChange;
    }

    /**
     * @param bool $languageChange
     * @return ViewInvoiceParamsDto
     */
    public function setLanguageChange($languageChange)
    {
        $this->languageChange = $languageChange;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLanguageChangeEnabled()
    {
        return $this->languageChangeEnabled;
    }

    /**
     * @param bool $languageChangeEnabled
     * @return ViewInvoiceParamsDto
     */
    public function setLanguageChangeEnabled($languageChangeEnabled)
    {
        $this->languageChangeEnabled = $languageChangeEnabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentpagelinkback()
    {
        return $this->currentpagelinkback;
    }

    /**
     * @param string $currentpagelinkback
     * @return ViewInvoiceParamsDto
     */
    public function setCurrentpagelinkback($currentpagelinkback)
    {
        $this->currentpagelinkback = $currentpagelinkback;
        return $this;
    }

    /**
     * @return array
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @param array $currencies
     * @return ViewInvoiceParamsDto
     */
    public function setCurrencies($currencies)
    {
        $this->currencies = $currencies;
        return $this;
    }

    /**
     * @return string
     */
    public function getTwitterusername()
    {
        return $this->twitterusername;
    }

    /**
     * @param string $twitterusername
     * @return ViewInvoiceParamsDto
     */
    public function setTwitterusername($twitterusername)
    {
        $this->twitterusername = $twitterusername;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnnouncementsFbRecommend()
    {
        return $this->announcementsFbRecommend;
    }

    /**
     * @param string $announcementsFbRecommend
     * @return ViewInvoiceParamsDto
     */
    public function setAnnouncementsFbRecommend($announcementsFbRecommend)
    {
        $this->announcementsFbRecommend = $announcementsFbRecommend;
        return $this;
    }

    /**
     * @return array
     */
    public function getCondlinks()
    {
        return $this->condlinks;
    }

    /**
     * @param array $condlinks
     * @return ViewInvoiceParamsDto
     */
    public function setCondlinks($condlinks)
    {
        $this->condlinks = $condlinks;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInvalidInvoiceIdRequested()
    {
        return $this->invalidInvoiceIdRequested;
    }

    /**
     * @param bool $invalidInvoiceIdRequested
     * @return ViewInvoiceParamsDto
     */
    public function setInvalidInvoiceIdRequested($invalidInvoiceIdRequested)
    {
        $this->invalidInvoiceIdRequested = $invalidInvoiceIdRequested;
        return $this;
    }

    /**
     * @return object
     */
    public function getPrimaryNavbar()
    {
        return $this->primaryNavbar;
    }

    /**
     * @param object $primaryNavbar
     * @return ViewInvoiceParamsDto
     */
    public function setPrimaryNavbar($primaryNavbar)
    {
        $this->primaryNavbar = $primaryNavbar;
        return $this;
    }

    /**
     * @return object
     */
    public function getSecondaryNavbar()
    {
        return $this->secondaryNavbar;
    }

    /**
     * @param object $secondaryNavbar
     * @return ViewInvoiceParamsDto
     */
    public function setSecondaryNavbar($secondaryNavbar)
    {
        $this->secondaryNavbar = $secondaryNavbar;
        return $this;
    }

    /**
     * @return object
     */
    public function getPrimarySidebar()
    {
        return $this->primarySidebar;
    }

    /**
     * @param object $primarySidebar
     * @return ViewInvoiceParamsDto
     */
    public function setPrimarySidebar($primarySidebar)
    {
        $this->primarySidebar = $primarySidebar;
        return $this;
    }

    /**
     * @return object
     */
    public function getSecondarySidebar()
    {
        return $this->secondarySidebar;
    }

    /**
     * @param object $secondarySidebar
     * @return ViewInvoiceParamsDto
     */
    public function setSecondarySidebar($secondarySidebar)
    {
        $this->secondarySidebar = $secondarySidebar;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ViewInvoiceParamsDto
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return ViewInvoiceParamsDto
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param int $invoiceNumber
     * @return ViewInvoiceParamsDto
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return ViewInvoiceParamsDto
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     * @return ViewInvoiceParamsDto
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatePaid()
    {
        return $this->datePaid;
    }

    /**
     * @param string $datePaid
     * @return ViewInvoiceParamsDto
     */
    public function setDatePaid($datePaid)
    {
        $this->datePaid = $datePaid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastCaptureAttempt()
    {
        return $this->lastCaptureAttempt;
    }

    /**
     * @param string $lastCaptureAttempt
     * @return ViewInvoiceParamsDto
     */
    public function setLastCaptureAttempt($lastCaptureAttempt)
    {
        $this->lastCaptureAttempt = $lastCaptureAttempt;
        return $this;
    }

    /**
     * @return object
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param object $subtotal
     * @return ViewInvoiceParamsDto
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return object
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param object $credit
     * @return ViewInvoiceParamsDto
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * @return object
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param object $tax
     * @return ViewInvoiceParamsDto
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return object
     */
    public function getTax2()
    {
        return $this->tax2;
    }

    /**
     * @param object $tax2
     * @return ViewInvoiceParamsDto
     */
    public function setTax2($tax2)
    {
        $this->tax2 = $tax2;
        return $this;
    }

    /**
     * @return object
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param object $total
     * @return ViewInvoiceParamsDto
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param string $taxRate
     * @return ViewInvoiceParamsDto
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxRate2()
    {
        return $this->taxRate2;
    }

    /**
     * @param string $taxRate2
     * @return ViewInvoiceParamsDto
     */
    public function setTaxRate2($taxRate2)
    {
        $this->taxRate2 = $taxRate2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ViewInvoiceParamsDto
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return ViewInvoiceParamsDto
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return object
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param object $balance
     * @return ViewInvoiceParamsDto
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGatewayName()
    {
        return $this->paymentGatewayName;
    }

    /**
     * @param string $paymentGatewayName
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentGatewayName($paymentGatewayName)
    {
        $this->paymentGatewayName = $paymentGatewayName;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }

    /**
     * @param int $invoiceid
     * @return ViewInvoiceParamsDto
     */
    public function setInvoiceid($invoiceid)
    {
        $this->invoiceid = $invoiceid;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumberOriginal()
    {
        return $this->invoiceNumberOriginal;
    }

    /**
     * @param string $invoiceNumberOriginal
     * @return ViewInvoiceParamsDto
     */
    public function setInvoiceNumberOriginal($invoiceNumberOriginal)
    {
        $this->invoiceNumberOriginal = $invoiceNumberOriginal;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentModule()
    {
        return $this->paymentModule;
    }

    /**
     * @param string $paymentModule
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentModule($paymentModule)
    {
        $this->paymentModule = $paymentModule;
        return $this;
    }

    /**
     * @return object
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * @param object $amountPaid
     * @return ViewInvoiceParamsDto
     */
    public function setAmountPaid($amountPaid)
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param string $dateCreated
     * @return ViewInvoiceParamsDto
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * @param string $dateDue
     * @return ViewInvoiceParamsDto
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     * @return ViewInvoiceParamsDto
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * @param string $taxName
     * @return ViewInvoiceParamsDto
     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxName2()
    {
        return $this->taxName2;
    }

    /**
     * @param string $taxName2
     * @return ViewInvoiceParamsDto
     */
    public function setTaxName2($taxName2)
    {
        $this->taxName2 = $taxName2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatuslocale()
    {
        return $this->statuslocale;
    }

    /**
     * @param string $statuslocale
     * @return ViewInvoiceParamsDto
     */
    public function setStatuslocale($statuslocale)
    {
        $this->statuslocale = $statuslocale;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayto()
    {
        return $this->payto;
    }

    /**
     * @param string $payto
     * @return ViewInvoiceParamsDto
     */
    public function setPayto($payto)
    {
        $this->payto = $payto;
        return $this;
    }

    /**
     * @return NULL
     */
    public function getSubscrid()
    {
        return $this->subscrid;
    }

    /**
     * @param NULL $subscrid
     * @return ViewInvoiceParamsDto
     */
    public function setSubscrid($subscrid)
    {
        $this->subscrid = $subscrid;
        return $this;
    }

    /**
     * @return object
     */
    public function getClienttotaldue()
    {
        return $this->clienttotaldue;
    }

    /**
     * @param object $clienttotaldue
     * @return ViewInvoiceParamsDto
     */
    public function setClienttotaldue($clienttotaldue)
    {
        $this->clienttotaldue = $clienttotaldue;
        return $this;
    }

    /**
     * @return object
     */
    public function getClientpreviousbalance()
    {
        return $this->clientpreviousbalance;
    }

    /**
     * @param object $clientpreviousbalance
     * @return ViewInvoiceParamsDto
     */
    public function setClientpreviousbalance($clientpreviousbalance)
    {
        $this->clientpreviousbalance = $clientpreviousbalance;
        return $this;
    }

    /**
     * @return object
     */
    public function getClientbalancedue()
    {
        return $this->clientbalancedue;
    }

    /**
     * @param object $clientbalancedue
     * @return ViewInvoiceParamsDto
     */
    public function setClientbalancedue($clientbalancedue)
    {
        $this->clientbalancedue = $clientbalancedue;
        return $this;
    }

    /**
     * @return object
     */
    public function getLastPaymentAmount()
    {
        return $this->lastPaymentAmount;
    }

    /**
     * @param object $lastPaymentAmount
     * @return ViewInvoiceParamsDto
     */
    public function setLastPaymentAmount($lastPaymentAmount)
    {
        $this->lastPaymentAmount = $lastPaymentAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastpaymenttransid()
    {
        return $this->lastpaymenttransid;
    }

    /**
     * @param string $lastpaymenttransid
     * @return ViewInvoiceParamsDto
     */
    public function setLastpaymenttransid($lastpaymenttransid)
    {
        $this->lastpaymenttransid = $lastpaymenttransid;
        return $this;
    }

    /**
     * @return array
     */
    public function getInvoiceitems()
    {
        return $this->invoiceitems;
    }

    /**
     * @param array $invoiceitems
     * @return ViewInvoiceParamsDto
     */
    public function setInvoiceitems($invoiceitems)
    {
        $this->invoiceitems = $invoiceitems;
        return $this;
    }

    /**
     * @return array
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param array $transactions
     * @return ViewInvoiceParamsDto
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentbutton()
    {
        return $this->paymentbutton;
    }

    /**
     * @param string $paymentbutton
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentbutton($paymentbutton)
    {
        $this->paymentbutton = $paymentbutton;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaymentSuccess()
    {
        return $this->paymentSuccess;
    }

    /**
     * @param bool $paymentSuccess
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentSuccess($paymentSuccess)
    {
        $this->paymentSuccess = $paymentSuccess;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaymentFailed()
    {
        return $this->paymentFailed;
    }

    /**
     * @param bool $paymentFailed
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentFailed($paymentFailed)
    {
        $this->paymentFailed = $paymentFailed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPendingReview()
    {
        return $this->pendingReview;
    }

    /**
     * @param bool $pendingReview
     * @return ViewInvoiceParamsDto
     */
    public function setPendingReview($pendingReview)
    {
        $this->pendingReview = $pendingReview;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOfflineReview()
    {
        return $this->offlineReview;
    }

    /**
     * @param bool $offlineReview
     * @return ViewInvoiceParamsDto
     */
    public function setOfflineReview($offlineReview)
    {
        $this->offlineReview = $offlineReview;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOfflinepaid()
    {
        return $this->offlinepaid;
    }

    /**
     * @param bool $offlinepaid
     * @return ViewInvoiceParamsDto
     */
    public function setOfflinepaid($offlinepaid)
    {
        $this->offlinepaid = $offlinepaid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaymentSuccessAwaitingNotification()
    {
        return $this->paymentSuccessAwaitingNotification;
    }

    /**
     * @param bool $paymentSuccessAwaitingNotification
     * @return ViewInvoiceParamsDto
     */
    public function setPaymentSuccessAwaitingNotification($paymentSuccessAwaitingNotification)
    {
        $this->paymentSuccessAwaitingNotification = $paymentSuccessAwaitingNotification;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowChangeGateway()
    {
        return $this->allowChangeGateway;
    }

    /**
     * @param bool $allowChangeGateway
     * @return ViewInvoiceParamsDto
     */
    public function setAllowChangeGateway($allowChangeGateway)
    {
        $this->allowChangeGateway = $allowChangeGateway;
        return $this;
    }

    /**
     * @return string
     */
    public function getGatewayDropdown()
    {
        return $this->gatewayDropdown;
    }

    /**
     * @param string $gatewayDropdown
     * @return ViewInvoiceParamsDto
     */
    public function setGatewayDropdown($gatewayDropdown)
    {
        $this->gatewayDropdown = $gatewayDropdown;
        return $this;
    }

    /**
     * @return int
     */
    public function getCartitemcount()
    {
        return $this->cartitemcount;
    }

    /**
     * @param int $cartitemcount
     * @return ViewInvoiceParamsDto
     */
    public function setCartitemcount($cartitemcount)
    {
        $this->cartitemcount = $cartitemcount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->templateFile;
    }

    /**
     * @param string $templateFile
     * @return ViewInvoiceParamsDto
     */
    public function setTemplateFile($templateFile)
    {
        $this->templateFile = $templateFile;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdminLoggedIn()
    {
        return $this->adminLoggedIn;
    }

    /**
     * @param bool $adminLoggedIn
     * @return ViewInvoiceParamsDto
     */
    public function setAdminLoggedIn($adminLoggedIn)
    {
        $this->adminLoggedIn = $adminLoggedIn;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdminMasqueradingAsClient()
    {
        return $this->adminMasqueradingAsClient;
    }

    /**
     * @param bool $adminMasqueradingAsClient
     * @return ViewInvoiceParamsDto
     */
    public function setAdminMasqueradingAsClient($adminMasqueradingAsClient)
    {
        $this->adminMasqueradingAsClient = $adminMasqueradingAsClient;
        return $this;
    }
}
