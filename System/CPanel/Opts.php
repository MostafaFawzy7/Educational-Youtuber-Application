<?
$Opts = array();
$Opts[] = array(
	'name'   =>   'إعدادات عامة',
	'id'     =>   'General',
	'type'   =>   'title',
	'icon'   =>   'fa-dashboard',
);
$Opts[] = array(
	'name'   =>   'شعار الهيدر',
	'id'     =>   'logodark',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'شعار الفوتر',
	'id'     =>   'logoLight',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'الصورة الإفتراضية',
	'id'     =>   'defultImg',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'شرح عن الأقسام',
	'id'     =>   'explaining',
	'type'   =>   'text',
);
///////////////////////////////
///////////////////////////////
///////////////////////////////
$Opts[] = array(
	'name'   =>   'إعدادات التواصل الإجتماعي',
	'id'     =>   'SocialNetwork',
	'type'   =>   'title',
	'icon'   =>   'fa-share',
);
///////////////////////////////
$Opts[] = array(
	'name'   =>   'فيسبوك',
	'id'     =>   'facebook',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'يوتيوب',
	'id'     =>   'youtube',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'تويتر',
	'id'     =>   'twitter',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'جوجل بلاس',
	'id'     =>   'googleplus',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'انستجرام',
	'id'     =>   'instagram',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'بينتريست',
	'id'     =>   'pinterest',
	'type'   =>   'text',
);
///////////////////////////////
///////////////////////////////
///////////////////////////////
$Opts[] = array(
	'name'   =>   'إعدادات الأرشفة',
	'id'     =>   'seo',
	'type'   =>   'title',
	'icon'   =>   'fa-code',
);
$Opts[] = array(
	'name'   =>   'Meta title',
	'id'     =>   'metatitle',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_title',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);
$Opts[] = array(
	'name'   =>   'Meta keywords',
	'id'     =>   'keywords',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_keywords',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);
$Opts[] = array(
	'name'   =>   'Meta description',
	'id'     =>   'description',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_description',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);
$Opts[] = array(
	'name'   =>   '404 Title',
	'id'     =>   'title404',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_title404',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);

///////////////////////////////////
		// Item Tabs Id = contact info
/////////////////////////////

$Opts[] = array(
	'name'   =>   'وسائل التواصل',
	'id'     =>   'contactInfo',
	'type'   =>   'title',
	'icon'   =>   'fa-th',
);

	$Opts[] = array(
		'name' => 'العنوان',
		'type' => 'text',
		'id'  => 'contact_id',

	);	
		$Opts[] = array(
		'name' => 'الإيميل',
		'type' => 'text',
		 'id'  => 'contact_email',
	);	
		$Opts[] = array(
		'name' => 'الموبايل',
		'type' => 'text',
		 'id'  => 'contact_mob',
	);	

///////////////////////////////////
		// Ads Partation
/////////////////////////////

$Opts[] = array(
	'name'   =>   'قسم الإعلانات ',
	'id'     =>   'adsAdding',
	'type'   =>   'title',
	'icon'   =>   'fa-dashboard',
);

/// index Ads ////		

		$Opts[] = array(
		'name' => 'إعلان أول الرئيسية 90*728',
		'type' => 'textarea_code',
		 'id'  => 'indexAd1',
	);
		$Opts[] = array(
		'name' => 'إعلان بعد الأقسام 90*728',
		'type' => 'textarea_code',
		'id'  => 'indexAd2',

	);	
		$Opts[] = array(
		'name' => 'إعلان بعد الأكثر مشاهدة 90*728',
		'type' => 'textarea_code',
		 'id'  => 'indexAd3',
	);	
		$Opts[] = array(
		'name' => 'إعلان بعد المواضيع 90*728	',
		'type' => 'textarea_code',
		 'id'  => 'indexAd4',
	);
		$Opts[] = array(
		'name' => 'إعلان الفوتر',
		'type' => 'textarea_code',
		 'id'  => 'footerAd',
	);

////// Single Ads//////

		$Opts[] = array(
		'name' => 'إعلان إول السينجل 90*728',
		'type' => 'textarea_code',
		'id'  => 'singleAd1',
	);	
		$Opts[] = array(
		'name' => 'إعلان بعد السوشيال 90*728',
		'type' => 'textarea_code',
		 'id'  => 'singleAd2',
	);	
		$Opts[] = array(
		'name' => 'إعلان قبل المحتوى 90*728',
		'type' => 'textarea_code',
		 'id'  => 'singleAd3',
	);
		$Opts[] = array(
		'name' => 'إعلان بعد المحتوى  90*728',
		'type' => 'textarea_code',
		'id'  => 'singleAd4',

	);	
		$Opts[] = array(
		'name' => 'إعلان بعد الفيديو 90*728',
		'type' => 'textarea_code',
		 'id'  => 'singleAd5',
	);	
		$Opts[] = array(
		'name' => 'إعلان بعد التعليقات 1  90*728',
		'type' => 'textarea_code',
		 'id'  => 'singleAd6',
	);
	$Opts[] = array(
		'name' => 'إعلان بعد التعليقات 2  90*728',
		'type' => 'textarea_code',
		'id'  => 'singleAd7',

	);	
		$Opts[] = array(
		'name' => 'إعلان بعد ذات صلة  90*728',
		'type' => 'textarea_code',
		 'id'  => 'singleAd8',
	);
		$Opts[] = array(
		'name' => 'إعلان القائمة الجانبية 1  250*300',
		'type' => 'textarea_code',
		 'id'  => 'singleAd9',
	);
		$Opts[] = array(
		'name' => 'إعلان القائمة الجانبية 2  250*300',
		'type' => 'textarea_code',
		 'id'  => 'singleAd10',
	);	
		$Opts[] = array(
		'name' => 'إعلان صفحة الإنتظار 1',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd1',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الإنتظار 2',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd2',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الإنتظار 3',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd3',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الإنتظار 4',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd4',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الروابط 1',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd5',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الروابط 2',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd6',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الروابط 3',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd7',
	);
		$Opts[] = array(
		'name' => 'إعلان صفحة الروابط 4',
		'type' => 'textarea_code',
		 'id'  => 'linkPageAd8',
	);
	$Opts[] = array(
		'name' => 'إعلان صفحة الأقسام 1',
		'type' => 'textarea_code',
		 'id'  => 'catPageAd1',
	);
	$Opts[] = array(
		'name' => 'إعلان صفحة الأقسام 2',
		'type' => 'textarea_code',
		 'id'  => 'catPageAd2',
	);
	$Opts[] = array(
		'name' => 'إعلان صفحة البحث  1',
		'type' => 'textarea_code',
		 'id'  => 'searchPageAd1',
	);
	$Opts[] = array(
		'name' => 'إعلان صفحة البحث  2',
		'type' => 'textarea_code',
		 'id'  => 'searchPageAd2',
	);