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
          Ҳанӯз шубҳа доред?
        </Text>
        <Text className="tarif-dignity-text" c="#5c5c5c" maw={900}>
          Мо мефаҳмем, ки интихоби низом як қарори муҳим аст. Инҳоянд чанд сабаби дигар, ки чаро Umag барои шумо дуруст аст.
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
                Ҳисоботҳои номаҳдуд
              </Text>
              <Text className="tarif-dignity-cardText">
                Дар бораи шумораи ҳисоботҳо, мавқеъҳо дар маҳзани молҳо, контрагентҳо ва истифодабарандагон ҳеҷ гуна маҳдудият вуҷуд надорад.
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
                Дастрасӣ ба маҳзани глобалӣ
              </Text>
              <Text className="tarif-dignity-cardText">
                Ба маҳзани молҳо, ки мунтазам нав карда мешавад ва зиёда аз 120 ҳазор номгуй ном дорад, алоқа дорад.
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
                Фурӯш бе Интернет
              </Text>
              <Text className="tarif-dignity-cardText">
                Хазина ҳатто бидуни пайвасти доимӣ ба интернет кори худро идома медиҳад.
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
            Оё шумо омодаед, ки бо Umag кор кунед?
          </Text>
          <Text className="tarif-feedback-text" c="#5c5c5c">
            Дархостро гузоред - менеҷер дар давоми рӯзи корӣ бо шумо тамос мегирад, ба ҳама саволҳо ҷавоб медиҳад ва дар пайвастшавӣ кӯмак мекунад.
          </Text>
        </Flex>
        <button className="tarif-feedback-button" onClick={handleConsulting}>
          Дархост гузоред
        </button>
      </Flex>
    </Flex>
  );
};
