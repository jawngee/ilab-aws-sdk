<?php
namespace ILAB_Aws\CloudWatchLogs;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Logs** service.
 *
 * @method \ILAB_Aws\Result cancelExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result createExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExportTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result createLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result createLogStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteLogStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogStreamAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricFilterAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteRetentionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRetentionPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteSubscriptionFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionFilterAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDestinationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLogGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogGroupsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeLogStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogStreamsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMetricFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricFiltersAsync(array $args = [])
 * @method \ILAB_Aws\Result describeResourcePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourcePoliciesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSubscriptionFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionFiltersAsync(array $args = [])
 * @method \ILAB_Aws\Result filterLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise filterLogEventsAsync(array $args = [])
 * @method \ILAB_Aws\Result getLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogEventsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsLogGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result putDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDestinationAsync(array $args = [])
 * @method \ILAB_Aws\Result putDestinationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDestinationPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result putLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLogEventsAsync(array $args = [])
 * @method \ILAB_Aws\Result putMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricFilterAsync(array $args = [])
 * @method \ILAB_Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result putRetentionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRetentionPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result putSubscriptionFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSubscriptionFilterAsync(array $args = [])
 * @method \ILAB_Aws\Result tagLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagLogGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result testMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testMetricFilterAsync(array $args = [])
 * @method \ILAB_Aws\Result untagLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagLogGroupAsync(array $args = [])
 */
class CloudWatchLogsClient extends AwsClient {}
