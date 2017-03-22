<?php
ini_set('max_execution_time', 0);
set_time_limit(0);
//curl_setopt($curl_handler, CURLOPT_TIMEOUT, 30); // 30 seconds
require 'aws/aws-autoloader.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
use Aws\Sqs\SqsClient;
use Aws\Credentials\Credentials;
# Note. other methods of providing the credentials did not work, so stick to this
        $credentials = new Credentials('AKIAJ7I5BMSG3CHXIQIA', 'LIZyw6q0m+Rmex3e/SQvAipo0oqXSESb8nT3srQb');
		$queueUrl = 'https://sqs.eu-west-1.amazonaws.com/';
        # Instantiate the S3 client with your AWS credentials
        $s3client = SqsClient::factory(array(
            'credentials' => $credentials,
			'region'  => 'eu-west-1',
			'version' => 'latest',
			'http' =>[
                'curl' => [
                    CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1,
                ]
            ],
        ));
		//print_r($s3client);exit;
		$queueUrl = $s3client->getQueueUrl(["QueueName" => "test"]);echo 2;exit;
		echo $queueUrl->get("QueueUrl");exit;
		
		$s3client->sendMessage(array(
		'QueueUrl'     => $queueUrl,
		'MessageBody'  => 'An awesome message!',
		'DelaySeconds' => 30,
	));
		echo 1;exit;
		$result = $s3client->createQueue(array(
    'QueueName'  => 'my-queue',
    'Attributes' => array(
        'DelaySeconds'       => 5,
        'MaximumMessageSize' => 4096, // 4 KB
    ),
));
$queueUrl = $result->get('QueueUrl');echo 1;exit;
		
		
		
		
		
$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'eu-west-1',
	'credentials' => [
        'key'    => 'AKIAJ7I5BMSG3CHXIQIA ',
        'secret' => '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',
    ],
]);
// Instantiate an Amazon S3 client.
$client = SqsClient::factory(array(
	'version' => 'latest',
    'key'    => 'AKIAJ7I5BMSG3CHXIQIA',
    'secret' => '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',
    'region' => 'eu-west-1'
));

$result = $client->createQueue(array('QueueName' => 'my-queue'));exit;
$queueUrl = $result->get('QueueUrl');

exit;
$result = $s3->getObject([
    'Bucket' => 'dev-17022016',
    'Key'    => 'AKIAJ7I5BMSG3CHXIQIA',
]);
try {
    $s3->putObject([
        'Bucket' => 'dev-17022016',
        'Key'    => 'new2.txt',
        'Body'   => "Hello World!"
        
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n".$e->getMessage();
}
/*$s3Client = new Aws\S3\S3Client([
    'version' => 'latest',
    'region'  => 'eu-west-1',
	'credentials' => [
        'key'    => 'AKIAIOYS6PP567MP7GNA',
        'secret' => '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'
    ],
	'Body'   => 'this is the body!'
]);

$s3 = $s3Client->createS3();
//$result = $s3->listBuckets();*/
