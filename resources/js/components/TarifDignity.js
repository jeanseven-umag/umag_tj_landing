import { Flex, Grid, Text } from "@mantine/core";
import "./css/TarifDignity.css";

export const TarifDignity = () => {
  const locale = window.currentLang;

  const handleConsulting = () => {
    window.location.href = "https://umag-main.kz/page57741021.html";
  };

  return (
    <Flex direction="column" className="tarif-dignity">
      <Flex direction="column" className="tarif-dignity-description">
        <Text className="tarif-dignity-caption">
          {locale === "tj"
            ? "Ҳанӯз шубҳа доред?"
            : "Все ещё сомневаетесь?"}
        </Text>
        <Text className="tarif-dignity-text" c="#5c5c5c" maw={900}>
          {locale === "tj"
            ? "Мо мефаҳмем, ки интихоби низом як қарори муҳим аст. Инҳоянд чанд сабаби дигар, ки чаро Umag барои шумо дуруст аст."
            : "Мы понимаем, что выбор системы это важное решение. Вот ещё несколько причин, почему Umag подойдёт именно вам."}
        </Text>
      </Flex>
      <Grid gutter="md">
        <Grid.Col
          span={{ xs: 12, sm: 6, md: 4 }}
          className="tarif-dignity-block-margin"
        >
          <Flex className="tarif-dignity-block">
            <Flex className="tarif-dignity-cardBlock" direction="column">
              <Text className="tarif-dignity-cardCaption">
                {locale === "tj"
                  ? "Ҳисоботҳои номаҳдуд"
                  : "Отчёты без ограничений"}
              </Text>
              <Text className="tarif-dignity-cardText">
                {locale === "tj"
                  ? "Дар бораи шумораи ҳисоботҳо, мавқеъҳо дар маҳзани молҳо, контрагентҳо ва истифодабарандагон ҳеҷ гуна маҳдудият вуҷуд надорад."
                  : "Нет ограничений по числу отчётов, позиций в товарной базе, контрагентов и пользователей."}
              </Text>
            </Flex>
            <img
              className="tarif-dignity-icon"
              src="/images/tarrifs/report.svg"
              alt="dignity icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col
          span={{ xs: 12, sm: 6, md: 4 }}
          className="tarif-dignity-block-margin"
        >
          <Flex className="tarif-dignity-block">
            <Flex
              className="tarif-dignity-cardBlock"
              direction="column"
              gap={8}
            >
              <Text className="tarif-dignity-cardCaption">
                {locale === "tj"
                  ? "Дастрасӣ ба маҳзани глобалӣ"
                  : "Доступ к глобальной базе"}
              </Text>
              <Text className="tarif-dignity-cardText">
                {locale === "tj"
                  ? "Ба маҳзани молҳо, ки мунтазам нав карда мешавад ва зиёда аз 120 ҳазор номгуй ном дорад, алоқа дорад."
                  : "Имеет подключение к базе товаров, которая регулярно обновляется и содержит более 120 тысяч позиций."}
              </Text>
            </Flex>
            <img
              className="tarif-dignity-icon"
              src="/images/tarrifs/db.svg"
              alt="dignity icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6, md: 4 }}>
          <Flex className="tarif-dignity-block">
            <Flex
              className="tarif-dignity-cardBlock"
              direction="column"
              gap={8}
            >
              <Text className="tarif-dignity-cardCaption">
                {locale === "tj"
                  ? "Фурӯш бе Интернет"
                  : "Продажи без интернета"}
              </Text>
              <Text className="tarif-dignity-cardText">
                {locale === "tj"
                  ? "Хазина ҳатто бидуни пайвасти доимӣ ба интернет кори худро идома медиҳад."
                  : "Касса продолжает работу в обычном режиме даже при отсутствии постоянного подключения к интернету."}
              </Text>
            </Flex>
            <img
              className="tarif-dignity-icon"
              src="/images/tarrifs/inet.svg"
              alt="dignity icon"
            />
          </Flex>
        </Grid.Col>
      </Grid>
      <Flex align={{ sm: "flex-end" }} className="tarif-feedback-block">
        <Flex direction="column">
          <Text className="tarif-feedback-caption">
            {locale === "tj"
              ? "Оё шумо омодаед, ки бо Umag кор кунед?"
              : "Готовы начать работу с Umag?"}
          </Text>
          <Text className="tarif-feedback-text" c="#5c5c5c">
            {locale === "tj"
              ? "Дархостро гузоред - менеҷер дар давоми рӯзи корӣ бо шумо тамос мегирад, ба ҳама саволҳо ҷавоб медиҳад ва дар пайвастшавӣ кӯмак мекунад."
              : "Оставьте заявку — менеджер свяжется с вами в течение рабочего дня, ответит на все вопросы и поможет с подключением."}
          </Text>
        </Flex>
        <button className="tarif-feedback-button" onClick={handleConsulting}>
          {locale === "tj" ? "Ariza qoldiring" : "Дархост гузоред"}
        </button>
      </Flex>
    </Flex>
  );
};
