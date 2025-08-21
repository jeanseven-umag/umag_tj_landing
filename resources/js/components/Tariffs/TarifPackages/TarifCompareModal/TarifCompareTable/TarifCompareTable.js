import { Flex, Table, Text } from "@mantine/core";
import { IconCheck, IconX } from "@tabler/icons-react";

export const TarifCompareTable = () => {
  return (
    <Table verticalSpacing="lg" mt={40}>
      <tbody>
        <tr style={{ backgroundColor: "#2dbe60" }}>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellCaption">
            Нишондодҳо оид ба мағозаҳо
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Барои ҳафта
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
            Барои моҳ
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
            Статистикаи фурӯш
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Аз рӯи молҳо
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
            Аз рӯи чекҳо
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
            Аз рӯи категорияҳо
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
            Аз рӯи таъминкунандагон
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
            Аз рӯи харидорон
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
            Муқоисаи молҳо
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
            Ҳисоботҳо
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Аз рӯи навбатҳо
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
            Аз рӯи кассирҳо
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
            Аз рӯи тахфифҳо
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
            Гузариши пул
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Гузариши пул
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
            Фоида ва зарарҳо
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Даромад
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
            Арзиши аслӣ
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
            Фоидаи умумӣ
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
            Хароҷоти амалиётӣ
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
            Фоидаи соф
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
            ABC - Таҳлил
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            ABC таҳлил
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
            Фурӯшҳо
          </td>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellThin">
            Танҳо тамошо
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Моли бекоршуда
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
            Фурӯшҳо
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
            Бозгашти харидорон
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
            Харидҳо
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Қабул
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
            Бозгашт ба таъминкунандагон
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
            Пардохтҳо
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
            Молҳо
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
            Молҳои зуд
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
            Анбор
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
            Списание / Қабул
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
            Инвентаризатсия
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
            Ҷойивазкунӣ
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
            Импорт кардани молҳо
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
            Молия
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Шарҳи ҳисобҳо
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
            Пардохтҳо (даромад / хароҷот)
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
            Гузаришҳо
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
            Контрагентҳо
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Харидорон
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
            Таъминкунандагон
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
            Идоракунӣ
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Истифодабарандагон
          </td>
          <td className="tariffs-compareModal-cell tariffs-compareMOdal-cellThin textColor-gray">
            <span style={{ marginRight: 10 }}>Танҳо тамошо</span>
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
            Идоракунии чек
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
            Идоракунии кассаҳо
          </td>
          <td className="tariffs-compareModal-cell tariffs-compareMOdal-cellThin textColor-gray">
            <span style={{ marginRight: 10 }}>Бе web-касса</span>
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
            Навъҳои хароҷот
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
            Танзими иҷозатҳо
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
            Обуна
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
            Барнома
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
            Дастур
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
            Функсияи иловагӣ
          </td>
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
          <td className="tariffs-compareModal-cell" />
        </tr>
        <tr>
          <td className="tariffs-compareModal-cell tariffs-compareModal-cellText">
            Машваратчиён
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
            Хати андоза
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
            Кушодан / бастан
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
            Истеҳсолот
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
            Аксҳои молҳо
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
            Системаи вафодорӣ
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
