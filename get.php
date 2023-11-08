<?php
require './aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// AWS Info
$bucketName = 'bucket_name';
$IAM_KEY = 'IAM_KEY';
$IAM_SECRET = 'IAM_SECRET_KEY';

// Connect to AWS
try {
	// You may need to change the region. It will say in the URL when the bucket is open
	// and on creation. us-east-2 is Ohio, us-east-1 is North Virgina
	$s3 = S3Client::factory(
		array(
			'credentials' => array(
				'key' => $IAM_KEY,
				'secret' => $IAM_SECRET
			),
			'version' => 'latest',
			'region'  => 'ap-southeast-1'
		)
	);

} catch (Exception $e) {

	die("Error: " . $e->getMessage());
}

if (file_exists('/tmp/tmpfile')) {
	$tempFilePath = '/tmp/tmpfile/pocs3';

	$tempFile = fopen($tempFilePath, "w") or die("Error: Unable to open file.");
	$file_name = 'pocs3/phpuDLmOB';

	try {
		$file = $s3->getObject([
			'Bucket' => $bucketName,
			'Key' => $file_name,
		]);
		$body = $file->get('Body');
		$body->rewind();

		$effectiveUri = $file['@metadata']['effectiveUri'];

		// Output the effectiveUri
		echo "Effective URI: " . $effectiveUri;

	} catch (Exception $exception) {
		echo "Failed to download $file_name from $bucketName with error: " . $exception->getMessage();
		exit("Please fix error with file downloading before continuing.");
	}


}
