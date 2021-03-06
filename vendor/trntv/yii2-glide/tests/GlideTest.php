<?php

namespace trntv\glide_tests;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class GlideTest extends TestCase
{
    /**
     * @retrun void
     */
    public function testValidateRequest()
    {
        $signedUrl = $this->getGlide()->createSignedUrl(['glide/index', 'path' => 'test-validate-request']);
        $this->assertEquals(
            true,
            $this->getGlide()->validateRequest(Request::create($signedUrl))
        );

        $url = 'https://www.google.com.ua/images/srpr/logo11w.png';
        $url = \sprintf('%s?s=test-invalid-signature&w=100', $url);
        $this->assertEquals(
            false,
            $this->getGlide()->validateRequest(Request::create($url))
        );
    }

    /**
     * @retrun void
     */
    public function testCreateSignedUrl()
    {
        $signedUrl = $this->getGlide()->createSignedUrl(['glide/index', 'path' => 'test-img']);
        $this->assertEquals(
            true,
            $this->getGlide()->validateRequest(Request::create($signedUrl))
        );
    }

    /**
     * @retrun void
     */
    public function testCreatePrettySignedUrl()
    {
        \Yii::$app->urlManager->enablePrettyUrl = true;
        \Yii::$app->urlManager->showScriptName = false;

        $signedUrl = $this->getGlide()->createSignedUrl(['glide/index', 'path' => 'test-img']);
        $this->assertEquals(
            true,
            $this->getGlide()->validateRequest(Request::create($signedUrl))
        );
    }

    /**
     * @retrun void
     */
    public function testSignUrl()
    {
        $url = 'https://www.google.com.ua/images/srpr/logo11w.png';
        $signedUrl = $this->getGlide()->signUrl($url, ['w' => 100]);
        $this->assertEquals(
            true,
            $this->getGlide()->validateRequest(Request::create($signedUrl))
        );
    }

    /**
     * @return \trntv\glide\components\Glide;
     */
    protected function getGlide()
    {
        return \Yii::$app->get('glide');
    }

}
