<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/config',
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/templates',
    ])
    ->withParallel(600, 8, 16)
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withRules([
       \Rector\DeadCode\Rector\Cast\RecastingRemovalRector::class,
       \Rector\DeadCode\Rector\If_\ReduceAlwaysFalseIfOrRector::class,
       \Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector::class,
       \Rector\DeadCode\Rector\BooleanAnd\RemoveAndTrueRector::class,
       \Rector\DeadCode\Rector\Concat\RemoveConcatAutocastRector::class,
       \Rector\DeadCode\Rector\Return_\RemoveDeadConditionAboveReturnRector::class,
       \Rector\DeadCode\Rector\For_\RemoveDeadContinueRector::class,
       \Rector\DeadCode\Rector\For_\RemoveDeadIfForeachForRector::class,
       \Rector\DeadCode\Rector\If_\RemoveDeadInstanceOfRector::class,
       \Rector\DeadCode\Rector\For_\RemoveDeadLoopRector::class,
       \Rector\DeadCode\Rector\FunctionLike\RemoveDeadReturnRector::class,
       \Rector\DeadCode\Rector\Expression\RemoveDeadStmtRector::class,
       \Rector\DeadCode\Rector\TryCatch\RemoveDeadTryCatchRector::class,
       \Rector\DeadCode\Rector\Plus\RemoveDeadZeroAndOneOperationRector::class,
       \Rector\DeadCode\Rector\Assign\RemoveDoubleAssignRector::class,
       \Rector\DeadCode\Rector\Array_\RemoveDuplicatedArrayKeyRector::class,
       \Rector\DeadCode\Rector\Switch_\RemoveDuplicatedCaseInSwitchRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveEmptyClassMethodRector::class,
       \Rector\DeadCode\Rector\PropertyProperty\RemoveNullPropertyInitializationRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveNullTagValueNodeRector::class,
       \Rector\DeadCode\Rector\StaticCall\RemoveParentCallWithoutParentRector::class,
       \Rector\DeadCode\Rector\ConstFetch\RemovePhpVersionIdCheckRector::class,
       \Rector\DeadCode\Rector\If_\RemoveTypedPropertyDeadInstanceOfRector::class,
       \Rector\DeadCode\Rector\Stmt\RemoveUnreachableStatementRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUnusedConstructorParamRector::class,
       \Rector\DeadCode\Rector\Foreach_\RemoveUnusedForeachKeyRector::class,
       \Rector\DeadCode\Rector\If_\RemoveUnusedNonEmptyArrayBeforeForeachRector::class,
       \Rector\DeadCode\Rector\ClassConst\RemoveUnusedPrivateClassConstantRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodParameterRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodRector::class,
       \Rector\DeadCode\Rector\Property\RemoveUnusedPrivatePropertyRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPromotedPropertyRector::class,
       \Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class,
       \Rector\DeadCode\Rector\Property\RemoveUselessReadOnlyTagRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnExprInConstructRector::class,
       \Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class,
       \Rector\DeadCode\Rector\Property\RemoveUselessVarTagRector::class,
       \Rector\DeadCode\Rector\If_\SimplifyIfElseWithSameContentRector::class,
       \Rector\DeadCode\Rector\Expression\SimplifyMirrorAssignRector::class,
       \Rector\DeadCode\Rector\Ternary\TernaryToBooleanOrFalseToBooleanAndRector::class,
       \Rector\DeadCode\Rector\If_\UnwrapFutureCompatibleIfPhpVersionRector::class,
    ])
    ->withSets([
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::EARLY_RETURN,
        SetList::INSTANCEOF,
        SetList::NAMING,
        LevelSetList::UP_TO_PHP_84,
    ]);
