<?php
/**
 * CreatorTest
 *
 * PHP version 7
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace CollingMedia\Lasso;

/**
 * CreatorTest Class Doc Comment
 *
 * @category    Class
 * @description Determines the user that created this entity based on an ordered set of Heuristics: - if creator is null or empty, then default to user: Lasso Autobot - if userId is provided, then lookup user by id, respond with 400 level error if specified user does not exist - if user first and last name are provided, then lookup user by name, otherwise default to user: Lasso Autobot
 * @package     CollingMedia\Lasso
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Creator"
     */
    public function testCreator()
    {
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
    }

    /**
     * Test attribute "user_id"
     */
    public function testPropertyUserId()
    {
    }
}
