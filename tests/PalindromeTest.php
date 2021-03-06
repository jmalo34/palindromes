<?php
    require_once 'src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_identify_single()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $word = 'kayak';

            //Act
            $result = $test_Palindrome->identify($word);

            //Assert
            $this->assertEquals(TRUE, $result);
        }

        function test_identify_phrase()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $word = 'Evil Olive';

            //Act
            $result = $test_Palindrome->identify($word);

            //Assert
            $this->assertEquals(TRUE, $result);
        }

        function test_identify_notapalindrome()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $word = 'computer';

            //Act
            $result = $test_Palindrome->identify($word);

            //Assert
            $this->assertEquals(FALSE, $result);
        }

        function test_identify_alphanumeric()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $word = '101 A Toyota 101';

            //Act
            $result = $test_Palindrome->identify($word);

            //Assert
            $this->assertEquals(TRUE, $result);
        }

        function test_identify_punctuation()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $word = 'A Santa at NASA!';

            //Act
            $result = $test_Palindrome->identify($word);

            //Assert
            $this->assertEquals(TRUE, $result);
        }

    }
 ?>
