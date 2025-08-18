import { Flex, Table, Text } from "@mantine/core";
import { IconCheck, IconX } from "@tabler/icons-react";

export const TarifCompareTable = () => {
  return (
    <Table verticalSpacing="lg" mt={40}>
      <tbody>
        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Показатели по магазинам
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            За неделю
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            За месяц
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Статистика продаж
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По товарам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По чекам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По категориям
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По поставщикам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По покупателям
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Сравнение товаров
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Отчеты
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По сменам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По кассирам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            По скидкам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Движение денег
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Движение денег
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Прибыли и убытки
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Выручка
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Себестоимость
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Валовая прибыль
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Операционные расходы
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Чистая прибыль
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            ABC - Анализ
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            ABC анализ
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Продажи
          </td>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellThin">
            Только просмотр
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Отмененный товар
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Продажи
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Возврат покупателей
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Закупки
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Приемка
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Возврат поставщикам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Платежи
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Товары
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Номенклатура
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Быстрые товары
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Склад
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Списание / Оприходование
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Инвентаризация
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Перемещение
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Импорт товаров
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Финансы
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Обзор по счетам
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Платежи (приход / расход)
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Переводы
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Контрагенты
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Покупатели
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Поставщики
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Управление
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Пользователи
          </td>
          <td className="tariffs-compareModal-cell tariffs-compareMOdal-cellThin textColor-gray">
            <span style={{ marginRight: 10 }}>Только просмотр</span>
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Управление чеком
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Управление кассами
          </td>
          <td className="tariffs-compareModal-cell tariffs-compareMOdal-cellThin textColor-gray">
            <span style={{ marginRight: 10 }}>Без web-кассы</span>
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Типы расходов
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Настройка разрешений
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Подписка
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Приложение
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Справочник
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>

        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Дополнительный функционал
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Консультанты
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Размерная линейка
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Распаковка / упаковка
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Производство
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Фотографии товаров
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Система лояльности
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconX color="#828282" />
          </td>
          <td className="tariffs-compareModal-cell">
            <IconCheck color="#2DBE60" />
          </td>
        </tr>
      </tbody>
    </Table>
  );
};
