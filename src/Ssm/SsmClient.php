<?php
namespace ILAB_Aws\Ssm;

use ILAB_Aws\AwsClient;

/**
 * Amazon EC2 Simple Systems Manager client.
 *
 * @method \ILAB_Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result cancelCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCommandAsync(array $args = [])
 * @method \ILAB_Aws\Result createActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivationAsync(array $args = [])
 * @method \ILAB_Aws\Result createAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result createAssociationBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationBatchAsync(array $args = [])
 * @method \ILAB_Aws\Result createDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result createMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result createPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPatchBaselineAsync(array $args = [])
 * @method \ILAB_Aws\Result createResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDataSyncAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParameterAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParametersAsync(array $args = [])
 * @method \ILAB_Aws\Result deletePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePatchBaselineAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceDataSyncAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterManagedInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterManagedInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterTargetFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetFromMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result deregisterTaskFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTaskFromMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result describeActivations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAutomationExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutomationExecutionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAvailablePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailablePatchesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result describeDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentPermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEffectiveInstanceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectiveInstanceAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEffectivePatchesForPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectivePatchesForPatchBaselineAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstanceAssociationsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAssociationsStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstanceInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceInformationAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstancePatchStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstancePatchStatesForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesForPatchGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result describeInstancePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceWindowExecutionTaskInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTaskInvocationsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceWindowExecutionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceWindowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceWindowTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTargetsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceWindowTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result describeMaintenanceWindows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \ILAB_Aws\Result describePatchBaselines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchBaselinesAsync(array $args = [])
 * @method \ILAB_Aws\Result describePatchGroupState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupStateAsync(array $args = [])
 * @method \ILAB_Aws\Result describePatchGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupsAsync(array $args = [])
 * @method \ILAB_Aws\Result getAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutomationExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result getCommandInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommandInvocationAsync(array $args = [])
 * @method \ILAB_Aws\Result getDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDefaultPatchBaselineAsync(array $args = [])
 * @method \ILAB_Aws\Result getDeployablePatchSnapshotForInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeployablePatchSnapshotForInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result getDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result getInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventoryAsync(array $args = [])
 * @method \ILAB_Aws\Result getInventorySchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventorySchemaAsync(array $args = [])
 * @method \ILAB_Aws\Result getMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result getMaintenanceWindowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result getMaintenanceWindowExecutionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result getMaintenanceWindowExecutionTaskInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskInvocationAsync(array $args = [])
 * @method \ILAB_Aws\Result getMaintenanceWindowTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result getParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterAsync(array $args = [])
 * @method \ILAB_Aws\Result getParameterHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterHistoryAsync(array $args = [])
 * @method \ILAB_Aws\Result getParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersAsync(array $args = [])
 * @method \ILAB_Aws\Result getParametersByPath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersByPathAsync(array $args = [])
 * @method \ILAB_Aws\Result getPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineAsync(array $args = [])
 * @method \ILAB_Aws\Result getPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result listAssociationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listCommandInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandInvocationsAsync(array $args = [])
 * @method \ILAB_Aws\Result listCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandsAsync(array $args = [])
 * @method \ILAB_Aws\Result listComplianceItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceItemsAsync(array $args = [])
 * @method \ILAB_Aws\Result listComplianceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceSummariesAsync(array $args = [])
 * @method \ILAB_Aws\Result listDocumentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentVersionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listDocuments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentsAsync(array $args = [])
 * @method \ILAB_Aws\Result listInventoryEntries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInventoryEntriesAsync(array $args = [])
 * @method \ILAB_Aws\Result listResourceComplianceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceComplianceSummariesAsync(array $args = [])
 * @method \ILAB_Aws\Result listResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDataSyncAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result modifyDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDocumentPermissionAsync(array $args = [])
 * @method \ILAB_Aws\Result putComplianceItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putComplianceItemsAsync(array $args = [])
 * @method \ILAB_Aws\Result putInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInventoryAsync(array $args = [])
 * @method \ILAB_Aws\Result putParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putParameterAsync(array $args = [])
 * @method \ILAB_Aws\Result registerDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDefaultPatchBaselineAsync(array $args = [])
 * @method \ILAB_Aws\Result registerPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result registerTargetWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetWithMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result registerTaskWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTaskWithMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result sendAutomationSignal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendAutomationSignalAsync(array $args = [])
 * @method \ILAB_Aws\Result sendCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCommandAsync(array $args = [])
 * @method \ILAB_Aws\Result startAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAutomationExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result stopAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAutomationExecutionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationAsync(array $args = [])
 * @method \ILAB_Aws\Result updateAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentAsync(array $args = [])
 * @method \ILAB_Aws\Result updateDocumentDefaultVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentDefaultVersionAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMaintenanceWindowTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowTargetAsync(array $args = [])
 * @method \ILAB_Aws\Result updateMaintenanceWindowTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result updateManagedInstanceRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateManagedInstanceRoleAsync(array $args = [])
 * @method \ILAB_Aws\Result updatePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePatchBaselineAsync(array $args = [])
 */
class SsmClient extends AwsClient {}
