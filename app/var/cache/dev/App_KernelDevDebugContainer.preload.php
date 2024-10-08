<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerFhxTxQL\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerFhxTxQL/EntityManagerGhostEbeb667.php';
require __DIR__.'/ContainerFhxTxQL/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/ContainerFhxTxQL/getValidator_WhenService.php';
require __DIR__.'/ContainerFhxTxQL/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerFhxTxQL/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerFhxTxQL/getValidator_ExpressionService.php';
require __DIR__.'/ContainerFhxTxQL/getValidator_EmailService.php';
require __DIR__.'/ContainerFhxTxQL/getValidator_BuilderService.php';
require __DIR__.'/ContainerFhxTxQL/getValidatorService.php';
require __DIR__.'/ContainerFhxTxQL/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerFhxTxQL/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerFhxTxQL/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerFhxTxQL/getTwigService.php';
require __DIR__.'/ContainerFhxTxQL/getSymbolsValidatorServiceService.php';
require __DIR__.'/ContainerFhxTxQL/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerFhxTxQL/getSession_FactoryService.php';
require __DIR__.'/ContainerFhxTxQL/getServicesResetterService.php';
require __DIR__.'/ContainerFhxTxQL/getSecrets_VaultService.php';
require __DIR__.'/ContainerFhxTxQL/getRouting_LoaderService.php';
require __DIR__.'/ContainerFhxTxQL/getPropertyAccessorService.php';
require __DIR__.'/ContainerFhxTxQL/getMonolog_Logger_MessengerService.php';
require __DIR__.'/ContainerFhxTxQL/getMonolog_Logger_MailerService.php';
require __DIR__.'/ContainerFhxTxQL/getMonolog_Logger_DeprecationService.php';
require __DIR__.'/ContainerFhxTxQL/getMonolog_Logger_CacheService.php';
require __DIR__.'/ContainerFhxTxQL/getMonolog_LoggerService.php';
require __DIR__.'/ContainerFhxTxQL/getMessenger_Retry_SendFailedMessageForRetryListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getMessenger_DefaultBusService.php';
require __DIR__.'/ContainerFhxTxQL/getMessenger_Bus_Default_Middleware_TraceableService.php';
require __DIR__.'/ContainerFhxTxQL/getMessenger_Bus_Default_Middleware_SendMessageService.php';
require __DIR__.'/ContainerFhxTxQL/getMessenger_Bus_Default_Middleware_HandleMessageService.php';
require __DIR__.'/ContainerFhxTxQL/getMailer_TransportsService.php';
require __DIR__.'/ContainerFhxTxQL/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerFhxTxQL/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerFhxTxQL/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerFhxTxQL/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerFhxTxQL/getMailer_TransportFactory_GmailService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_TraceableRunsListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_StopwatchSubscriberService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_SerializationContextFactoryService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_Metadata_TypedPropertiesDriverService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_IteratorHandlerService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_FormErrorHandlerService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_DoctrineProxySubscriberService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_DeserializationContextFactoryService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_DatetimeHandlerService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_ConstraintViolationHandlerService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializer_ArrayCollectionHandlerService.php';
require __DIR__.'/ContainerFhxTxQL/getJmsSerializerService.php';
require __DIR__.'/ContainerFhxTxQL/getHttpClient_UriTemplateService.php';
require __DIR__.'/ContainerFhxTxQL/getHttpClient_TransportService.php';
require __DIR__.'/ContainerFhxTxQL/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_Type_FormService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_Type_FileService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_Type_EntityService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_Type_ColorService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_RegistryService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_FactoryService.php';
require __DIR__.'/ContainerFhxTxQL/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerFhxTxQL/getErrorControllerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerFhxTxQL/getDoctrineService.php';
require __DIR__.'/ContainerFhxTxQL/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerFhxTxQL/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerFhxTxQL/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerFhxTxQL/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerFhxTxQL/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_SystemClearerService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_SystemService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_Messenger_RestartWorkersSignalService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_AppClearerService.php';
require __DIR__.'/ContainerFhxTxQL/getCache_AppService.php';
require __DIR__.'/ContainerFhxTxQL/getTemplateControllerService.php';
require __DIR__.'/ContainerFhxTxQL/getRedirectControllerService.php';
require __DIR__.'/ContainerFhxTxQL/getMailServiceService.php';
require __DIR__.'/ContainerFhxTxQL/getHistoricalQuotesControllerService.php';
require __DIR__.'/ContainerFhxTxQL/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerFhxTxQL/get_ServiceLocator_JSfaiipService.php';
require __DIR__.'/ContainerFhxTxQL/get_ServiceLocator_B6ePwvxService.php';
require __DIR__.'/ContainerFhxTxQL/get_Messenger_HandlerDescriptor_TGvt0LHService.php';
require __DIR__.'/ContainerFhxTxQL/get_Messenger_HandlerDescriptor_P4QvabmService.php';
require __DIR__.'/ContainerFhxTxQL/get_Messenger_HandlerDescriptor_KEzMhfsService.php';
require __DIR__.'/ContainerFhxTxQL/get_Messenger_HandlerDescriptor_QXXNQ9dService.php';
require __DIR__.'/ContainerFhxTxQL/get_Messenger_HandlerDescriptor_6kVvRT_Service.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerFhxTxQL/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerFhxTxQL/get_CacheConnection_GDMSZCService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlerDescriptor';
$classes[] = 'Symfony\Component\HttpClient\Messenger\PingWebhookMessageHandler';
$classes[] = 'Symfony\Component\Process\Messenger\RunProcessMessageHandler';
$classes[] = 'Symfony\Component\Console\Messenger\RunCommandMessageHandler';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Console\Application';
$classes[] = 'Symfony\Component\Messenger\Handler\RedispatchMessageHandler';
$classes[] = 'Symfony\Component\Mailer\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Application\v1\Controller\HistoricalQuotesController';
$classes[] = 'App\Application\v1\Service\FinanceDataService';
$classes[] = 'App\Application\v1\Service\CsvGeneratorService';
$classes[] = 'App\Application\v1\Service\RetrieveValidSymbolsService';
$classes[] = 'App\Application\v1\Service\MailService';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\RedisAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Monolog\Logger';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Logging\Middleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\HttpClient\UriTemplateHttpClient';
$classes[] = 'current';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableMetadataFactory';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableHandlerRegistry';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\Serializer\Metadata\Driver\TypedPropertiesDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableFileLocator';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationOrAttributeDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\NullDriver';
$classes[] = 'JMS\SerializerBundle\Serializer\StopwatchEventSubscriber';
$classes[] = 'JMS\SerializerBundle\Debug\RunsListener';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeHelper';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\HandleMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlersLocator';
$classes[] = 'Symfony\Component\Messenger\Middleware\SendMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Transport\Sender\SendersLocator';
$classes[] = 'Symfony\Component\Messenger\Middleware\TraceableMiddleware';
$classes[] = 'Symfony\Component\Messenger\MessageBus';
$classes[] = 'Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnCustomStopExceptionListener';
$classes[] = 'Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'App\Application\v1\Validator\Constraints\IsValidSymbolValidator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';

$preloaded = Preloader::preload($classes);
