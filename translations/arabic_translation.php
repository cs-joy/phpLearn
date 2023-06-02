
<?php
/*
 * Created on 05-Jul-2006
 * rob.s.smart@gmail.com
 * Translator class calls external machine translation component
 */
 
 class Phonetics
 {

		/*
		 * we'll use the suggested media usage romanization for these
		 * http://www.al-bab.com/arab/language/roman1.htm
		 */
		public function EnglishToArabic($source)
		{
			mb_internal_encoding("UTF-8");
			// lowercase it all to start with
			//$source = strtolower($source);

			// start by looking for the 8 letters that have an approximate equivalent in arabic
			// these are B,F,K,L,M,N,R and Z

				// hack to pick out i 
			if(strlen($source) == 1)
			{
				if($source=='i')
				{
					echo "آ";
				}

			}


			// check for arabic chars in

			// remove all the vowels unless they're doubled up or u or ie
			echo " ";
			for ($i = 0; $i < strlen($source); $i++) 
			{
				$char = substr($source, $i, 1);

				// check for arabic characters in the string and just output them if they exist
				if(ord(substr($source, 0, 1))==216 || ord(substr($source, 0, 1))==217)
				{	
					echo substr($source, $i, 2);
					$i++;
					continue;
				}

				$char = strtolower($char);
				switch($char)
				{

					case 'a':
						echo 'ا'; // alif
					break;
					case 'b':
						echo 'ب'; // bah
					break;
					case 'c':
						echo 'ك'; // kah
					break;
					case 'd':
						echo 'د'; // dal
					break;
					case 'e':
						echo 'ي'; // yeh
					break;
					case 'f':
						echo 'ف'; // feh
					break;
					case 'g':
						echo 'غ'; // ghaim
					break;
					case 'h':
						echo 'ه'; // heh
					break;
					case 'i':
						echo 'ي'; // yeh
					break;
					case 'j':
						echo 'ج'; // jeem
					break;
					case 'k':
						echo 'ك'; // kaf
					break;
					case 'l':
						echo 'ل'; // lam
					break;
					case 'm':
						echo 'م'; // meem
					break;
					case 'n':
						echo 'ن'; // noon
					break;
					case 'o':
						echo 'و'; // waw
					break;
					case 'p':
						echo 'ب'; // beh
					break;
					case 'q':
						echo 'ك'; // kah
					break;
					case 'r':
						echo 'ر'; // reh
					break;
					case 's':
						echo 'س'; // seen
					break;
					case 't':
						echo 'ت'; // teh
					break;
					case 'u':
						echo 'و'; // waw
					break;
					case 'v':
						echo 'ڤ'; // veh
					break;
					case 'w':
						echo 'و'; // waw
					break;
					case 'x':
						echo 'كس'; // kaf and seen
					break;
					case 'y':
						echo 'ي'; // yeh
					break;
					case 'z':
						echo 'ز'; // zain
					break;
					default:
						echo $char;						
					break;
				}
			}

		}

		/*
		 * we'll use the ALA-LC Romanization Tables for this
		 * http://www.al-bab.com/arab/language/roman1.htm
		 */
 		public function ArabicToEnglish($source)
		{
			mb_internal_encoding("UTF-8");


			echo " ";
			for ($i = 0; $i < strlen($source); $i++) 
			{
				$byte1 = ord(substr($source, $i, 1));
				$byte2 = ord(substr($source, $i+1, 1));



			// hack to pick out wa (and), aw (or)
			if(strlen($source) == 2)
			{
				if($byte1==217 && $byte2==136)
				{
					echo "wa";
				}

				if($byte1==216 && $byte2==163)
				{
					echo "aw";
				}
			}

				switch($byte1)
				{

					case 216:
						switch($byte2)
						{
							case 155:
								echo ";";// arabic semicolon ؛
							break;
							case 159:
								echo "?";// ؟ arabic question mark
							break;
							case 161:
								echo "a";// ء hamza
							break;
							case 162:
								echo "AA";// آ Alif with madda
							break;
							case 163:
								echo "a";// أ Alif with hamza
							break;
							case 164:
								echo "ou";//ؤ waw with hamza
							break;
							case 165:
								echo "i";//إ alif with hamza below
							break;
							case 166:
								echo "i";// ئ yeh with hamza above
							break;							
							case 167:
								echo "a";// alifا
							break;
							case 168:
								echo "b";//  ب bah
							break;
									case 169:
										echo "a";//  ة teh marbuta (fastened teh)
									break;
							case 170:
								echo "t";//  ت teh
							break;
							case 171:
								echo "th";//  ث theh
							break;
							case 172:
								echo "j";//  ج jeem
							break;
							case 173:
								echo "H";//  ح hah
							break;
							case 174:
								echo "kh";// خ khah
							break;
							case 175:
								echo "d";// د dal
							break;
							case 176:
								echo "Th";// ذ thal
							break;
							case 177:
								echo "r";// ر reh
							break;
							case 178:
								echo "z";// ز zain
							break;
							case 179:
								echo "s";// س seen
							break;
							case 180:
								echo "sh";// ش sheen
							break;
							case 181:
								echo "S";// sad ص
							break;
							case 182:
								echo "dh";// ض dad
							break;
							case 183:
								echo "T";// ط tah
							break;
							case 184:
								echo "TH";// ظ zah
							break;
							case 185:
								echo "A";// ع ain
							break;
							case 186:
								echo "gh";// غ ghain
							break;
							case 187:
								echo "gh";// غ ghain
							break;
						}
					break;
					case 217:
						switch($byte2)
						{
							case 128:
								echo "";// ـ tatwheel
							break;
							case 129:
								echo "f";// ف Feh
							break;
							case 130:
								echo "q";// ق qaf
							break;
							case 131:
								echo "k";// ك kaf
							break;							
							case 132:
								echo "l";//  Lam ل
							break;
							case 133:
								echo "m";// م meem
							break;
							case 134:
								echo "n";// ن noon
							break;	
							case 135:
								echo "h";// ه heh
							break;	
							case 136:
								echo "o";// و waw
							break;	
							case 137:
								echo "a";// ى alef maksure
							break;
							case 138:
								echo "i";// ي yeh
							break;
							// numbers
							case 160:
								echo "0";// ٠
							break;
							case 161:
								echo "1";// ١
							break;
							case 162:
								echo "2";// ٢
							break;
							case 163:
								echo "3";// ٣
							break;
							case 164:
								echo "4";// ٤
							break;
							case 165:
								echo "5";// ٥
							break;
							case 166:
								echo "6";// ٦
							break;
							case 167:
								echo "7";// ٧
							break;
							case 168:
								echo "8";// ٨
							break;	
							case 169:
								echo "9";// ٩
							break;	

						}
					break;

					default: // if no characters match assume english and just output
						echo substr($source, $i, 1);
						// this was a single byte char so take one off the loop
						$i=$i-1;
					break;

				}
				$i++;
				continue;


			}

		}

		public function ArToEnPhonetic($string)
		{
			$words = explode(" ",$string);

			foreach($words as $word)
			{
				$this->ArabicToEnglish($word);
			}
		}

		public function EnToArPhonetic($string)
		{
			$words = explode(" ",$string);

			foreach($words as $word)
			{
				$this->EnglishToArabic($word);
			}
		}



 }
 
 ?>
